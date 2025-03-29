<?php

namespace FileEye\MediaProbe\Block;

use FileEye\MediaProbe\Block\Media\Tiff\Tag;
use FileEye\MediaProbe\Collection\CollectionFactory;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataException;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Model\BlockBase;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class representing a map of values.
 *
 * This class is useful when you have a sparse table of data and want to access
 * it directly by offset.
 */
class Map extends Index
{
    /**
     * The format of map data.
     */
    protected int $format;

    public function __construct(
        ItemDefinition $definition,
        ?BlockBase $parent = null,
        ?BlockBase $reference = null,
    ) {
        parent::__construct($definition, $parent, $reference);
        $this->components = $definition->valuesCount;
        $this->format = $definition->format;
    }

    /**
     * @deprecated
     */
    protected function doParseData(DataElement $data): void
    {
        trigger_error(__METHOD__ . '() deprecated', E_USER_DEPRECATED);
        $this->validate($data);
        assert($this->debugInfo(['dataElement' => $data]));

        // Preserve the entire map as a raw data block.
        $mapdataCollection = CollectionFactory::get('RawData', ['name' => 'mapdata']);
        $mapdataHandler = $mapdataCollection->handler();
        $mapdata = new $mapdataHandler(
            collection: $mapdataCollection,
            dataFormat: DataFormat::BYTE,
            countOfComponents: $data->getSize(),
            parent: $this,
        );
        $mapdata->fromDataElement(new DataWindow($data));
        assert($mapdata instanceof RawData);
        $this->graftBlock($mapdata);

        // Build the map items.
        $i = 0;
        foreach ($this->getCollection()->listItemIds() as $item) {
            $n = $item * DataFormat::getSize($this->getFormat());

            $ifdEntry = $this->ifdEntryFromDataElement(
                seq: $i,
                id: $item,
                dataElement: $data,
                offset: $n,
            );

            if ($ifdEntry === false) {
                continue;
            }

            // Check data is accessible, notice otherwise.
            if ($n >= $data->getSize()) {
                $this->debug(
                    '\'{item}\' in map \'{map}\' is beyond end of data available, skipped',
                    [
                        'item' => $ifdEntry->collection->getPropertyValue('name'),
                        'map' => $this->getAttribute('name'),
                    ]
                );
                continue;
            }
            if ($n +  $ifdEntry->size > $data->getSize()) {
                $this->warning(
                    'Failed to get value for \'{item}\' in map \'{map}\', not enough data left',
                    [
                        'item' => $ifdEntry->collection->getPropertyValue('name'),
                        'map' => $this->getAttribute('name'),
                    ]
                );
                continue;
            }

            // Adds the item to the DOM.
            $item_class = $ifdEntry->collection->handler();
            assert(is_a($item_class, Tag::class, true) || is_a($item_class, RawData::class, true));
            try {
                if (is_a($item_class, Tag::class, true)) {
                    $item = new $item_class(
                        ifdEntry: $ifdEntry,
                        parent: $this,
                    );
                    $tagDataWindow = new DataWindow($data, $n, $ifdEntry->countOfComponents * $ifdEntry->size);
                    $item->fromDataElement($tagDataWindow);
                    $this->graftBlock($item);
                } elseif (is_a($item_class, RawData::class, true)) {
                    $item = new $item_class(
                        collection: $ifdEntry->collection,
                        dataFormat: $ifdEntry->dataFormat,
                        countOfComponents:  $ifdEntry->countOfComponents,
                        parent: $this,
                    );
                    assert($item instanceof RawData);
                    $item->fromDataElement(new DataWindow($data, $n, $ifdEntry->countOfComponents * $ifdEntry->size));
                    $this->graftBlock($item);
                }
            } catch (DataException $e) {
                $item->error($e->getMessage());
            }

            $i++;
        }
    }

    public function getFormat(): int
    {
        return $this->format;
    }

    public function getComponents(): int
    {
        return $this->components;
    }

    public function toBytes(int $byte_order = ConvertBytes::LITTLE_ENDIAN, int $offset = 0, $has_next_ifd = false): string
    {
        $mapDataElement = $this->getElement("rawData[@name='mapdata']/entry");
        if ($mapDataElement === null) {
            return '';
        }
        $mapDataBytes = $mapDataElement->toBytes();

        // Dump each tag at the position in the map specified by the item id.
        foreach ($this->getMultipleElements('*[not(self::rawData)]') as $sub_id => $sub) {
            $bytes_offset = ((int) $sub->getAttribute('id')) * DataFormat::getSize($this->getFormat());
            $bytes = $sub->toBytes($byte_order);
            $bytes_length = strlen($bytes);

            $tmp = substr($mapDataBytes, 0, $bytes_offset);
            $tmp .= $bytes;
            $tmp .= substr($mapDataBytes, $bytes_offset + $bytes_length);

            $mapDataBytes = $tmp;
        }

        return $mapDataBytes;
    }
}
