<?php

namespace FileEye\MediaProbe\Block;

use FileEye\MediaProbe\Block\Media\Tiff\IfdItemValue;
use FileEye\MediaProbe\Block\Media\Tiff\Tag;
use FileEye\MediaProbe\Block\RawData;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataException;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\Model\ListBase;
use FileEye\MediaProbe\Model\ListItemValue;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class representing an index of values.
 */
class Index extends ListBase
{
    /**
     * Validates the list against the specification.
     */
    protected function validate(DataElement $dataElement): void
    {
        // Warn if format is not as expected.
        $expected_format = $this->getCollection()->getPropertyValue('format');
        if ($expected_format !== null && $this->getFormat() !== null && !in_array($this->getFormat(), $expected_format)) {
            $expected_format_names = [];
            foreach ($expected_format as $expected_format_id) {
                $expected_format_names[] = DataFormat::getName($expected_format_id);
            }
            $this->notice("Found {format_name} data format, expected {expected_format_names}", [
                'format_name' => DataFormat::getName($this->getFormat()),
                'expected_format_names' => implode(', ', $expected_format_names),
            ]);
        }

        // If the 'hasIndexSize' property is true, the index begins with an
        // entry representing the entire size of the index (included the entry
        // itself). This should match the size determined in the parent IFD.
        if ($this->getCollection()->getPropertyValue('hasIndexSize')) {
            $offset = 0;
            $index_size = $this->getValueFromData($dataElement, $offset, $this->getCollection()->getPropertyValue('format')[0]);
            if ($index_size !== $this->getDefinition()->getSize()) {
                $this->error("Size mismatch between IFD and index header");
            }
        }
    }

    /**
     * @deprecated
     */
    protected function doParseData(DataElement $data): void
    {
        trigger_error(__METHOD__ . '() deprecated', E_USER_DEPRECATED);
        $this->validate($data);

        // Loop through the index and parse the tags. If the 'hasIndexSize'
        // property is true, the first entry is a special case that is handled
        // by opening a 'rawData' node instead of a 'tag'.
        $offset = 0;
        $this->components = $this->getDefinition()->valuesCount;
        assert($this->debugInfo(['dataElement' => $data]));

        for ($i = 0; $i < $this->components; $i++) {
            $ifdEntry = $this->ifdEntryFromDataElement(
                seq: $i,
                id: $i,
                dataElement: $data,
                offset: $offset,
            );

            if ($ifdEntry === false) {
                continue;
            }

            // Check if this tag should be skipped.
            if ($ifdEntry->collection->getPropertyValue('skip')) {
                $this->debug("Skipped");
                continue;
            };

            $this->components -= ($ifdEntry->countOfComponents - 1);

            // Adds the 'tag'.
            $item_class = $ifdEntry->collection->handler();
            assert(is_a($item_class, Tag::class, true) || is_a($item_class, RawData::class, true));
            if (is_a($item_class, Tag::class, true)) {
                $item = new $item_class(
                    ifdEntry: $ifdEntry,
                    parent: $this,
                );
                $tagDataWindow = new DataWindow($data, $offset, $ifdEntry->size);
                $item->fromDataElement($tagDataWindow);
                $this->graftBlock($item);
            } elseif (is_a($item_class, RawData::class, true)) {
                $item = new $item_class(
                    listItem: new ListItemValue($ifdEntry->collection, $ifdEntry->dataFormat, $ifdEntry->countOfComponents),
                    parent: $this,
                );
                assert($item instanceof RawData);
                $item->fromDataElement(new DataWindow($data, $offset, $ifdEntry->size));
                $this->graftBlock($item);
            }

            $offset += $ifdEntry->size;
        }
    }

    /**
     * Gets the IfdItemValue object of an IFD entry, from the data.
     *
     * @param int $seq
     *   The sequence (0-index) of the item in the index.
     * @param mixed $id
     *   The id of the item in the index.
     * @param DataElement $dataElement
     *   The data element that will provide the data.
     * @param int $offset
     *   The offset within the data element where the count can be found.
     */
    protected function ifdEntryFromDataElement(
        int $seq,
        mixed $id,
        DataElement $dataElement,
        int $offset,
        int $dataDisplacement = 0,
        ?string $fallbackCollectionId = null,
    ): IfdItemValue|false {
        // In case the item is not found in the collection for the index,
        // we still load it as a 'tag'.
        $item_collection = $this->getCollection()->getItemCollection($id, 0, 'Media\\Tiff\\UnknownTag', [
            'item' => $id,
            'DOMNode' => 'tag',
        ]);
        $item_format = $item_collection->getPropertyValue('format')[0] ?? $this->getFormat();
        $item_components = $item_collection->getPropertyValue('components') ?? 1;

        return new IfdItemValue(
            sequence: $seq,
            collection: $item_collection,
            dataFormat: $item_format,
            dataFormatFromData: $item_format,
            countOfComponents: $item_components,
        );
    }

    /**
     * @todo xxx
     */
    protected function getValueFromData(DataElement $dataElement, int &$offset, int $format, int $count = 1): mixed
    {
        $dataWindow = $this->getDataWindowFromData($dataElement, $offset, $format, $count);
        return match ($format) {
            DataFormat::BYTE => $dataWindow->getByte(),
            DataFormat::SHORT => $dataWindow->getShort(),
            DataFormat::SHORT_REV => $dataWindow->getShortRev(),
            DataFormat::SIGNED_SHORT => $dataWindow->getSignedShort(),
            DataFormat::LONG => $dataWindow->getLong(),
            DataFormat::SIGNED_LONG => $dataWindow->getSignedLong(),
            DataFormat::RATIONAL => $dataWindow->getRational(),
            DataFormat::SIGNED_RATIONAL => $dataWindow->getSignedRational(),
            default => throw new DataException("Unsupported format."),
        };
    }

    /**
     * @todo xxx
     */
    protected function getDataWindowFromData(DataElement $dataElement, int &$offset, int $format, int $count = 1): DataWindow
    {
        $size = match ($format) {
            DataFormat::ASCII, DataFormat::BYTE, DataFormat::UNDEFINED => 1,
            DataFormat::SHORT, DataFormat::SHORT_REV, DataFormat::SIGNED_SHORT => 2,
            DataFormat::LONG, DataFormat::SIGNED_LONG => 4,
            DataFormat::RATIONAL, DataFormat::SIGNED_RATIONAL => 8,
            default => throw new DataException("Unsupported format."),
        };
        $value = new DataWindow($dataElement, $offset, $count * $size);
        $offset += ($count * $size);
        return $value;
    }

    public function toBytes(int $byte_order = ConvertBytes::LITTLE_ENDIAN, int $offset = 0, $has_next_ifd = false): string
    {
        $data_bytes = '';

        // Get the tags to be written. The index size, if present, is stored in
        // a rawData node.
        foreach ($this->getMultipleElements('tag') as $tag => $tag_block) {
            assert($tag_block instanceof Tag);
            $data_bytes .= $tag_block->toBytes($byte_order);
        }

        $actual_size = strlen($data_bytes);

        if ($expected_size = $this->getCollection()->getPropertyValue('hasIndexSize')) {
            // When writing back, the index size itself is a short, part of the
            // actual size, so we add 2 to the written value.
            return ConvertBytes::fromShort($actual_size + 2, $byte_order) . $data_bytes;
        } else {
            return $data_bytes;
        }
    }

    public function getComponents(): int
    {
        $components = 0;
        foreach ($this->getMultipleElements('tag') as $tag) {
            assert($tag instanceof Tag);
            $tag_size = DataFormat::getSize($tag->getFormat()) * $tag->getComponents();
            // Components are in Shorts, $tag_size is in Bytes, so normalize.
            $components += $tag_size / 2;
        }
        if ($this->getCollection()->getPropertyValue('hasIndexSize')) {
            $components++;
        }
        return $components;
    }

    public function collectInfo(array $context = []): array
    {
        $info = [];

        $parentInfo = parent::collectInfo($context);

        $msg = '#{seq} {node}:{name}';

        $info['seq'] = $this->getDefinition()->sequence + 1;
        if ($this->getParentElement() && ($parent_name = $this->getParentElement()->getAttribute('name'))) {
            $info['seq'] = $parent_name . '.' . $info['seq'];
        }

        if (isset($parentInfo['item'])) {
            $msg .= ' ({item})';
            $info['item'] = is_numeric($parentInfo['item']) ?$parentInfo['item'] . '/0x' . strtoupper(dechex($parentInfo['item'])) : $parentInfo['item'];
        }

        if (isset($parentInfo['size'])) {
            $msg .= isset($parentInfo['offset']) ? ' @{offset}, {tags} entries, f {format}, s {size}' : ' {tags} entries, format ?xxx, size {size}';
        }

        $info['tags'] = $context['itemsCount'] ?? 'n/a';
        $info['format'] = DataFormat::getName($this->getDefinition()->format);
        $info['_msg'] = $msg;

        return array_merge($parentInfo, $info);
    }
}
