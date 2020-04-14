<?php

namespace FileEye\MediaProbe\Block\MakerNotes\Apple;

use FileEye\MediaProbe\Block\ListBase;
use FileEye\MediaProbe\ItemFormat;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Block\RawData;
use FileEye\MediaProbe\Block\Tag;
use FileEye\MediaProbe\Block\Ifd;
use FileEye\MediaProbe\Collection;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataException;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\ElementInterface;
use FileEye\MediaProbe\Entry\Core\EntryInterface;
use FileEye\MediaProbe\MediaProbe;
use FileEye\MediaProbe\MediaProbeException;
use FileEye\MediaProbe\Utility\ConvertBytes;

class MakerNote extends Ifd
{
    /**
     * {@inheritdoc}
     */
    public function loadFromData(DataElement $data_element, $xxx=0): void
    {
        $size = $data_element->getSize();
        $offset = $this->getDefinition()->getDataOffset();

        // Load Apple's header as a raw data block.
        $header_data_definition = new ItemDefinition(Collection::get('RawData', ['name' => 'appleHeader']), ItemFormat::BYTE, 14);
        $header_data_window = new DataWindow($data_element, $offset, 14);
        $header = new RawData($header_data_definition, $this);
        $header->loadFromData($header_data_window);

        $offset += 14;

        // Get the number of entries.
        $n = $this->getItemsCountFromData($data_element, $offset);
        $this->debugBlockInfo($data_element, $n);

        // Load the Blocks.
        for ($i = 0; $i < $n; $i++) {
            $i_offset = $offset + 2 + 12 * $i;
            try {
                $item_definition = $this->getItemDefinitionFromData($i, $data_element, $i_offset, $xxx);
                $item_class = $item_definition->getCollection()->getPropertyValue('class');
                $item = new $item_class($item_definition, $this);
                if (is_a($item_class, Ifd::class, TRUE)) {
                    $item->loadFromData($data_element);
                }
                else {
                    $item_data_window = new DataWindow($data_element, $item_definition->getDataOffset(), $item_definition->getSize());
                    $item->loadFromData($item_data_window);
                }
            } catch (DataException $e) {
                $item->error($e->getMessage());
                $valid = false;
            }
        }
/*        for ($i = 0; $i < $n; $i++) {
            $i_offset = $offset + 2 + 12 * $i;
            $item_definition = $this->getItemDefinitionFromData($i, $data_element, $i_offset, $offset - 14);

            $class = $item_definition->getCollection()->getPropertyValue('class');
            $ifd_entry = new $class($item_definition, $this);

            try {
                $ifd_entry->loadFromData($data_element, $item_definition->getDataOffset(), $size);
            } catch (DataException $e) {
                $this->error($e->getMessage());
            }
        }*/

        $this->valid = true;

        // Invoke post-load callbacks.
        $this->executePostLoadCallbacks($data_element);
    }

    protected function getItemDefinitionFromData(int $seq, DataElement $data_element, int $offset, int $data_offset_shift = 0, string $fallback_collection_id = null): ItemDefinition
    {
        $id = $data_element->getShort($offset);
        $format = $data_element->getShort($offset + 2);
        $components = $data_element->getLong($offset + 4);
        $size = ItemFormat::getSize($format) * $components;

        // If the data size is bigger than 4 bytes, then actual data is not in
        // the TAG's data element, but at the the offset stored in the data
        // element.
        if ($size > 4) {
            $data_offset = $data_element->getLong($offset + 8) + $data_offset_shift;
        } else {
            $data_offset = $offset + 8;
        }
dump([$seq, $id, $format, $components, $size, $data_element->getLong($offset + 8), $data_offset_shift, $data_offset]);

        // Fall back to the generic IFD collection if the item is missing from
        // the appropriate one.
        try {
            $item_collection = $this->getCollection()->getItemCollection($id);
        }
        catch (MediaProbeException $e) {
            if ($fallback_collection_id !== null) {
                $item_collection = Collection::get($fallback_collection_id)->getItemCollection($id, 'UnknownTag', [
                    'item' => $id,
                    'DOMNode' => 'tag',
                ]);
            }
            else {
                $item_collection = $this->getCollection()->getItemCollection($id, 'UnknownTag', [
                    'item' => $id,
                    'DOMNode' => 'tag',
                ]);
            }
        }

        // If the item is an Ifd, recurse in loading the item at offset.
        if (is_a($item_collection->getPropertyValue('class'), Ifd::class, TRUE)) {
          // Check the offset.
          $item_offset = $data_element->getLong($offset + 8);
/*          if ($item_offset <= $offset) {
            $this->error('Invalid offset pointer to IFD: {offset}.', [
                'offset' => $item_definition->getDataOffset(),
            ]);
            $valid = false;
            continue;
          }*/
          $components = $data_element->getShort($item_offset - 8);
          $format = ItemFormat::LONG;
          $data_offset = $item_offset;
        }

        return new ItemDefinition($item_collection, $format, $components, $data_offset, $data_element->getStart() + $offset, $seq);
    }

    /**
     * {@inheritdoc}
     */
    public function toBytes($byte_order = ConvertBytes::LITTLE_ENDIAN, $offset = 0, $has_next_ifd = false)
    {
        $bytes = $this->getElement('rawData')->toBytes();

        // Number of sub-elements. 2 bytes running.
        $n = count($this->getMultipleElements('*')) - 1;
        $bytes .= ConvertBytes::fromShort($n, $byte_order);

        // Data area. We need to reserve 12 bytes for each IFD tag + 4 bytes
        // at the end for the link to next IFD as space occupied by IFD
        // entries.
        $data_area_offset = strlen($bytes) + $n * 12 + 4;
        $data_area_bytes = '';

        // Fill in the TAG entries in the IFD.
        foreach ($this->getMultipleElements('*') as $tag => $sub_block) {
            if ($sub_block->getCollection()->getId() === 'RawData') {
                continue;
            }

            $bytes .= ConvertBytes::fromShort($sub_block->getAttribute('id'), $byte_order);
            $bytes .= ConvertBytes::fromShort($sub_block->getFormat(), $byte_order);
            $bytes .= ConvertBytes::fromLong($sub_block->getComponents(), $byte_order);

            $data = $sub_block->toBytes($byte_order, $data_area_offset);
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

        // There is no next IFD.
        $bytes .= ConvertBytes::fromLong(0, $byte_order);

        // Append data area.
        $bytes .= $data_area_bytes;

        return $bytes;
    }
}
