<?php

namespace FileEye\MediaProbe\Block\Exif\Vendor\Canon;

use FileEye\MediaProbe\Block\Maker\Canon\Exif\MakerNote;
use FileEye\MediaProbe\Block\Media\Tiff\Tag;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataException;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\MediaProbeException;
use FileEye\MediaProbe\Model\ListBase;
use FileEye\MediaProbe\Model\ListItemValue;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Manages parsing and writing of Canon CustomFunctions2 tags.
 */
class CustomFunctions2Header extends ListBase
{
    public function __construct(
        public readonly ListItemValue $listItem,
        MakerNote $parent,
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
    }

    public function fromDataElement(DataElement $dataElement): CustomFunctions2Header
    {
        assert($this->debugInfo(['dataElement' => $dataElement]));

        $offset = 0;
        $size = $this->getDefinition()->getSize();

        // Validate incoming size.
        if ($size !== $dataElement->getLong($offset)) {
            throw new DataException("index:%s mismatching data size", $this->getAttribute('name')); // @todo ingest in logging
        } elseif ($size < 8) {
            throw new DataException("index:%s invalid data size", $this->getAttribute('name')); // @todo ingest in logging
        }

        // Get groups count.
        $groups_count = $dataElement->getLong($offset + 4);
        $this->debug("index:{name} @{offset} with {tags} groups, size {size}", [
            'name' => $this->getAttribute('name'),
            'tags' => $groups_count,
            'offset' => $dataElement->getStart() + $offset,
            'size' => $size,
        ]);

        // Parse groups.
        $pos = $offset + 8;
        for ($i = 0; $i < $groups_count; $i++) {
            $rec_num = $dataElement->getLong($pos);
            $rec_len = $dataElement->getLong($pos + 4);
            $rec_count = $dataElement->getLong($pos + 8);
            $this->debug("index:{name} group {num} with {tags} tags, size {size} @{offset}", [
                'name' => $this->getAttribute('name'),
                'num' => $rec_num,
                'tags' => $rec_count,
                'size' => $rec_len,
                'offset' => $dataElement->getStart() + $pos,
            ]);

            $pos += 12;
            try {
                $groupCollection = $this->getCollection()->getItemCollection($rec_num);
                $groupHandler = $groupCollection->handler();
                $group = new $groupHandler(
                    listItem: new ListItemValue($groupCollection, DataFormat::SIGNED_LONG, $rec_count),
                    parent: $this,
                );
                $group->fromDataElement(new DataWindow($dataElement, $pos, min($rec_len, $dataElement->getSize() - $pos)));
                $this->graftBlock($group);
            } catch (\Exception $e) {
                $this->error($e->getMessage());
                throw new MediaProbeException($e->getMessage()); // @todo ingest in logging
            }
            $pos += ($rec_len - 8);
        }

        return $this;
    }

    public function toBytes(int $byte_order = ConvertBytes::LITTLE_ENDIAN, int $offset = 0, $has_next_ifd = false): string
    {
        $bytes = '';

        // Fill in the Functions2 groups.
        foreach ($this->getMultipleElements('*') as $group) {
            assert($group instanceof CustomFunctions2, get_class($group));

            // The group's data.
            $group_data = $group->toBytes($byte_order);
            // The group's ID.
            $group_bytes = ConvertBytes::fromLong($group->getAttribute('id'), $byte_order);
            // The group's data size.
            $group_bytes .= ConvertBytes::fromLong(strlen($group_data) + 8, $byte_order);
            // The group's items count.
            $group_bytes .= ConvertBytes::fromLong($group->getComponents(), $byte_order);
            // Append the group's data.
            $group_bytes .= $group_data;

            // Append the group's bytes.
            $bytes .= $group_bytes;
        }

        // Add number of groups.
        $bytes = ConvertBytes::fromLong(count($this->getMultipleElements('*')), $byte_order) . $bytes;

        // Add total size and return.
        return ConvertBytes::fromLong(strlen($bytes) + 4, $byte_order) . $bytes;
    }

    public function getComponents(): int
    {
        // The components in this case is the total number of Long values
        // stored in the index. At the start, we have 1 long representing the
        // total size in bytes, and 1 long representing the number of groups,
        // so we start the count off 2.
        $components = 2;
        foreach ($this->getMultipleElements('*') as $group) {
            assert($group instanceof CustomFunctions2, get_class($group));
            // For each group, 1 long for the ID, 1 long to represent the
            // size of the group, 1 long to represent the number of tags.
            $components += (1 + 1 + 1);
            foreach ($group->getMultipleElements('tag') as $tag) {
                assert($tag instanceof Tag, get_class($tag));
                // For each tag, 1 long for the ID, 1 long to represent the
                // number of tag values, then as many longs as the number of
                // values.
                $components += (1 + 1 + $tag->getComponents());
            }
        }
        return $components;
    }
}
