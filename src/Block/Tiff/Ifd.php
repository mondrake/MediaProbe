<?php

namespace FileEye\MediaProbe\Block\Tiff;

use FileEye\MediaProbe\Block\Jpeg\Jpeg;
use FileEye\MediaProbe\Block\ListBase;
use FileEye\MediaProbe\Block\Tiff\Tag;
use FileEye\MediaProbe\Block\Thumbnail;
use FileEye\MediaProbe\Collection\CollectionFactory;
use FileEye\MediaProbe\Collection\CollectionInterface;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataException;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\Data\DataString;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\Model\ElementInterface;
use FileEye\MediaProbe\Model\EntryInterface;
use FileEye\MediaProbe\Entry\Core\Undefined;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\MediaProbe;
use FileEye\MediaProbe\MediaProbeException;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class representing an Image File Directory (IFD).
 */
class Ifd extends ListBase
{
    /**
     * {@inheritdoc}
     */
    public function toBytes(int $byte_order = ConvertBytes::LITTLE_ENDIAN, int $offset = 0, $has_next_ifd = false): string
    {
        $bytes = '';

        // Number of sub-elements. 2 bytes running.
        $n = count($this->getMultipleElements('*'));
        if ($thumbnail = $this->getElement('thumbnail')) {
            $n += 1;
        }
        $bytes .= ConvertBytes::fromShort($n, $byte_order);

        // Data area. We need to reserve 12 bytes for each IFD tag + 4 bytes
        // at the end for the link to next IFD as space occupied by IFD
        // entries.
        $data_area_offset = $offset + strlen($bytes) + $n * 12 + 4;
        $data_area_bytes = '';

        // Fill in the TAG entries in the IFD.
        foreach ($this->getMultipleElements('*') as $tag => $sub_block) {
            if ($sub_block->getCollection()->getPropertyValue('id') === 'Thumbnail') {
                continue;
            }

            $data = $sub_block->toBytes($byte_order, $data_area_offset);

            $bytes .= ConvertBytes::fromShort($sub_block->getAttribute('id'), $byte_order);
            if ((int) $sub_block->getAttribute('id') === 37500) {
                $bytes .= ConvertBytes::fromShort(DataFormat::UNDEFINED, $byte_order);
                $bytes .= ConvertBytes::fromLong(strlen($data), $byte_order);
            } else {
                $bytes .= ConvertBytes::fromShort($sub_block->getFormat(), $byte_order);
                $bytes .= ConvertBytes::fromLong($sub_block->getComponents(), $byte_order);
            }

            $s = strlen($data);
            if ($s > 4) {
                $bytes .= ConvertBytes::fromLong($data_area_offset, $byte_order);
                $data_area_bytes .= $data;
                $data_area_offset += $s;
            } else {
                // Copy data directly, pad with NULL bytes as necessary to
                // fill out the four bytes available.
                $bytes .= $data . str_repeat(chr(0), 4 - $s);
            }
        }

        // Thumbnail.
        if ($thumbnail) {
            $thumbnail_entry = $thumbnail->getElement('entry');
            // Add offset.
            $bytes .= ConvertBytes::fromShort($this->getCollection()->getItemCollectionByName('ThumbnailOffset')->getPropertyValue('item'), $byte_order);
            $bytes .= ConvertBytes::fromShort(DataFormat::LONG, $byte_order);
            $bytes .= ConvertBytes::fromLong(1, $byte_order);
            $bytes .= ConvertBytes::fromLong($data_area_offset, $byte_order);
            // Add length.
            $bytes .= ConvertBytes::fromShort($this->getCollection()->getItemCollectionByName('ThumbnailLength')->getPropertyValue('item'), $byte_order);
            $bytes .= ConvertBytes::fromShort(DataFormat::LONG, $byte_order);
            $bytes .= ConvertBytes::fromLong(1, $byte_order);
            $bytes .= ConvertBytes::fromLong($thumbnail_entry->getComponents(), $byte_order);
            // Add thumbnail.
            $data_area_bytes .= $thumbnail_entry->toBytes();
            $data_area_offset += $thumbnail_entry->getComponents();
        }

        // Append link to next IFD.
        if ($has_next_ifd) {
            $bytes .= ConvertBytes::fromLong($data_area_offset, $byte_order);
        } else {
            $bytes .= ConvertBytes::fromLong(0, $byte_order);
        }

        // Append data area.
        $bytes .= $data_area_bytes;

        return $bytes;
    }

    public function collectInfo(array $context = []): array
    {
        $info = [];

        $parentInfo = parent::collectInfo($context);

        $msg = '#{seq} {node}:{name}';

        $info['seq'] = $this->getDefinition()->getSequence() + 1;
        if ($this->getParentElement() && ($parent_name = $this->getParentElement()->getAttribute('name'))) {
            $info['seq'] = $parent_name . '.' . $info['seq'];
        }

        if (isset($parentInfo['item'])) {
            $msg .= ' ({item})';
            $info['item'] = is_numeric($parentInfo['item']) ? $parentInfo['item'] . '/0x' . strtoupper(dechex($parentInfo['item'])) : $parentInfo['item'];
        }

        if (isset($context['dataElement']) && $context['dataElement'] instanceof DataWindow) {
            $info['offset'] = $context['dataElement']->getAbsoluteOffset($this->getDefinition()->getDataOffset()) . '/0x' . strtoupper(dechex($context['dataElement']->getAbsoluteOffset($this->getDefinition()->getDataOffset())));
        }

        $info['tags'] = $context['itemsCount'] ?? 'n/a';
        $msg .= isset($info['offset']) ? ' @{offset}, {tags} entries' : ' {tags} entries';

        $info['_msg'] = $msg;

        return array_merge($parentInfo, $info);
    }
}
