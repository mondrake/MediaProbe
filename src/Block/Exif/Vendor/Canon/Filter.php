<?php declare(strict_types=1);

namespace FileEye\MediaProbe\Block\Exif\Vendor\Canon;

use FileEye\MediaProbe\Block\Media\Tiff\IfdItemValue;
use FileEye\MediaProbe\Block\Media\Tiff\Tag;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Model\ListBase;
use FileEye\MediaProbe\Model\ListItemValue;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class representing a Filter, for Canon Filter segments.
 *
 * Data segment structure:
 *
 * Id       Lenght   P count  P#1 Idx  P#1 cnt  P#1 val  P#2 Idx  P#2 cnt  P#2 val  ...
 * 04000000 38000000 04000000 01040000 01000000 FFFFFFFF 02040000 01000000 00000000 03040000 01000000 00000000 04040000 01000000 00000000
 */
class Filter extends ListBase
{
    /**
     * The number of parameters for this filter.
     */
    protected int $paramsCount;

    public function __construct(
        public readonly ListItemValue $listItem,
        FilterInfoIndex $parent,
    ) {
        parent::__construct(
            definition: new ItemDefinition(
                collection: $this->listItem->collection,
                format: $this->listItem->dataFormat,
                valuesCount: $this->listItem->countOfComponents,
            ),
            parent: $parent,
            graft: false,
        );
        $this->setAttribute('name', $this->getParentElement()->getAttribute('name') . '.' . $listItem->sequence);
    }

    public function fromDataElement(DataElement $dataElement): Filter
    {
        $offset = 0;

        // The id of the filter is at offset 0.
        $this->setAttribute('id', (string) $dataElement->getLong($offset));

        // The count of filter parameters is at offset 8.
        $this->paramsCount = $dataElement->getLong($offset + 8);
        $offset += 12;

        assert($this->debugInfo(['dataElement' => $dataElement]));

        // Loop and parse through the parameters.
        for ($p = 0; $p < $this->paramsCount; $p++) {
            $id = (string) $dataElement->getLong($offset);
            $val_count = $dataElement->getLong($offset + 4);
            $offset += 8;

            // The items are defined in the collection of the parent element.
            $ifdEntry = new IfdItemValue(
                sequence: $p,
                collection: $this->getParentElement()->collection->getItemCollection($id),
                dataFormat: DataFormat::SIGNED_LONG,
                countOfComponents: $val_count,
                data: 0,
                #$offset?
            );
            $tagHandler = $ifdEntry->collection->handler();
            $tag = new $tagHandler($ifdEntry, $this);
            assert($tag instanceof Tag, get_class($tag));
            $tag->fromDataElement(new DataWindow(
                $dataElement,
                $offset,
                $val_count * DataFormat::getSize(DataFormat::SIGNED_LONG),
            ));
            $this->graftBlock($tag);

            $offset += 4 * $val_count;
        }

        return $this;
    }

    public function toBytes(int $byte_order = ConvertBytes::LITTLE_ENDIAN, int $offset = 0, $has_next_ifd = false): string
    {
        $bytes = '';

        // The id of the filter.
        $bytes .= ConvertBytes::fromLong((int) $this->getAttribute('id'), $byte_order);

        // Build the parameters.
        $params = $this->getMultipleElements('*');
        $data_area_bytes = '';
        foreach ($params as $param) {
            assert($param instanceof Tag, get_class($param));
            $data_area_bytes .= ConvertBytes::fromLong((int)  $param->getAttribute('id'), $byte_order);
            $data_area_bytes .= ConvertBytes::fromLong($param->getComponents(), $byte_order);
            $data_area_bytes .= $param->toBytes($byte_order);
        }

        // The length of the filter.
        $bytes .= ConvertBytes::fromLong(strlen($data_area_bytes) + 8, $byte_order);

        // The number of filter parameters.
        $bytes .= ConvertBytes::fromLong(count($params), $byte_order);

        // Append data area.
        $bytes .= $data_area_bytes;

        return $bytes;
    }

    public function collectInfo(array $context = []): array
    {
        return array_merge(parent::collectInfo($context), [
            '_msg' =>'#{seq}.{name} @{offset}, {parmetersCount} parameter(s), size {size} bytes',
            'seq' => $this->getDefinition()->sequence + 1,
            'parmetersCount' => $this->paramsCount,
        ]);
    }

    protected function getContextPathSegmentPattern(): string
    {
        return '/{DOMNode}:{id}';
    }

    public function getParentElement(): FilterInfoIndex
    {
        $parent = parent::getParentElement();
        assert($parent instanceof FilterInfoIndex);
        return $parent;
    }
}
