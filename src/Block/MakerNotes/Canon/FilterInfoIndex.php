<?php

namespace FileEye\MediaProbe\Block\MakerNotes\Canon;

use FileEye\MediaProbe\Block\Index;
use FileEye\MediaProbe\Block\Map;
use FileEye\MediaProbe\Block\RawData;
use FileEye\MediaProbe\Block\Tag;
use FileEye\MediaProbe\Collection;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\ItemFormat;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class representing an index of values, for Canon Filter information.
 *
 * Data segment structure:
 *
 * Header   Count
 * D4000000 07000000
 *
 * Id       Lenght   P count  P#1 Idx  P#1 cnt  P#1 val  P#2 Idx  P#2 cnt  P#2 val  ...
 * 01000000 14000000 01000000 01010000 01000000 FFFFFFFF
 * 02000000 14000000 01000000 01020000 01000000 FFFFFFFF
 * 03000000 14000000 01000000 01030000 01000000 FFFFFFFF
 * 04000000 38000000 04000000 01040000 01000000 FFFFFFFF 02040000 01000000 00000000 03040000 01000000 00000000 04040000 01000000 00000000
 * 05000000 14000000 01000000 01050000 01000000 FFFFFFFF
 * 06000000 14000000 01000000 01060000 01000000 FFFFFFFF
 * 07000000 14000000 01000000 01070000 01000000 FFFFFFFF
 */
class FilterInfoIndex extends Index
{
    /**
     * {@inheritdoc}
     */
    public function parseData(DataElement $data_element): void
    {
        $this->debugBlockInfo($data_element);

//        $this->validate($data_element);

        $offset = 0;

        // The first 4 bytes is a marker (?), store as RawData.
        $header_data_definition = new ItemDefinition(Collection::get('RawData', ['name' => 'filterHeader']), ItemFormat::BYTE, 4);
        $header_data_window = new DataWindow($data_element, $offset, 4);
        $header = new RawData($header_data_definition, $this);
        $header->parseData($header_data_window);

        // The next 4 bytes define the count of filters.
        $offset += 4;
        $index_components = $data_element->getLong($offset);
        $this->debug("{filters} filters", [
            'filters' => $index_components,
        ]);

        // Loop through the filters.
        $offset += 4;
        for ($i = 0; $i < $index_components; $i++) {
            $filter_number = $data_element->getLong($offset);
            $filter_size = $data_element->getLong($offset + 4);
            $filter_param_count = $data_element->getLong($offset + 8);
            $this->debug("Filter {filter}, {params} parameter(s), size {size} bytes", [
                'filter' => $filter_number,
                'params' => $filter_param_count,
                'size' => $filter_size,
            ]);
            $next = $offset + 4 + $filter_size;
            $offset += 12;
            for ($p = 0; $p < $filter_param_count; $p++) {
                $id = $data_element->getLong($offset);
                $count = $data_element->getLong($offset + 4);
                $offset += 8;
                $val = $data_element->getSignedLong($offset);
                $this->debug("Tag: $id $count $val");
                try {
                    $item_definition = new ItemDefinition($this->getCollection()->getItemCollection($id), ItemFormat::SIGNED_LONG, $count);
                    $class = $item_definition->getCollection()->getPropertyValue('class');
                    $param = new $class($item_definition, $this);
                    $param->parseData($data_element, $offset, $count * ItemFormat::getSize(ItemFormat::SIGNED_LONG));
                } catch (\Exception $e) {
                    $this->valid = false;
                    $this->error($e->getMessage());
                    throw new MediaProbeException($e->getMessage()); // @todo ingest in logging
                }
                $offset += 4 * $count;
            }
            $offset = $next;
        }

        $this->valid = true;

        // Invoke post-load callbacks.
        $this->executePostLoadCallbacks($data_element);
    }
}
