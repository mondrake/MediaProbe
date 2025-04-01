<?php

namespace FileEye\MediaProbe\Block\Exif\Vendor\Canon;

use FileEye\MediaProbe\Block\Media\Tiff\IfdItemValue;
use FileEye\MediaProbe\Block\Media\Tiff\Tag;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataException;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Model\ListBase;
use FileEye\MediaProbe\Model\ListItemValue;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * @todo xxx
 */
class CustomFunctions2 extends ListBase
{
    public function __construct(
        public readonly ListItemValue $listItem,
        CustomFunctions2Header $parent,
    ) {
        parent::__construct(
            collection: $this->listItem->collection,
            parent: $parent,
        );
    }

    public function fromDataElement(DataElement $dataElement): CustomFunctions2
    {
        assert($this->debugInfo(['dataElement' => $dataElement]));

        $rec_pos = 0;
        for ($n = 0; $n < $this->listItem->countOfComponents; $n++) {
            $id = $dataElement->getLong($rec_pos);
            $num = $dataElement->getLong($rec_pos + 4);
            $this->debug("#{seq}, tag {id}/{hexid}, f {format}, c {components}, data @{offset}, size {size}", [
                'seq' => $n + 1,
                'id' => $id,
                'hexid' => '0x' . strtoupper(dechex($id)),
                'format' => DataFormat::getName(DataFormat::SIGNED_LONG),
                'components' => $num,
                'offset' => $dataElement->getStart() + $rec_pos + 8,
                'size' => $num * 4,
            ]);
            $rec_pos += 8;
            try {
                $item_collection = $this->collection->getItemCollection(
                    $id,
                    null,
                    'Media\\Tiff\\UnknownTag',
                    ['item' => $id, 'DOMNode' => 'tag'],
                    $num,
                    $this->getRootElement()
                );
                $ifdEntry = new IfdItemValue(
                    collection: $item_collection,
                    dataFormat: DataFormat::SIGNED_LONG,
                    countOfComponents: $num,
                    data: $rec_pos,
                );
                $class = $item_collection->handler();
                $tag = new $class($ifdEntry, $this);
                $tag_data_window = new DataWindow($dataElement, $ifdEntry->isOffset ? $ifdEntry->dataOffset() : $ifdEntry->dataValue(), $ifdEntry->size);
                $tag->fromDataElement($tag_data_window);
                $this->graftBlock($tag);
            } catch (DataException $e) {
                if (isset($tag)) {
                    $tag->error($e->getMessage());
                } else {
                    throw $e;
                }
            }
            $rec_pos += ($num * 4);
        }

        return $this;
    }

    public function toBytes(int $byte_order = ConvertBytes::LITTLE_ENDIAN, int $offset = 0, $has_next_ifd = false): string
    {
        $bytes = '';

        // Fill in the TAG entries.
        foreach ($this->getMultipleElements('*') as $element) {
            assert($element instanceof Tag);
            // Tag ID.
            $bytes .= ConvertBytes::fromLong($element->getAttribute('id'), $byte_order);
            // Number of value items for the tag.
            $bytes .= ConvertBytes::fromLong($element->getComponents(), $byte_order);
            // The value(s) themselves.
            $bytes .= $element->toBytes($byte_order);
        }

        return $bytes;
    }
}
