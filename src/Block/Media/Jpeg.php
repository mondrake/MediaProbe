<?php

namespace FileEye\MediaProbe\Block\Media;

use FileEye\MediaProbe\Block\Media\Jpeg\SegmentBase;
use FileEye\MediaProbe\Block\RawData;
use FileEye\MediaProbe\Collection\CollectionFactory;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataException;
use FileEye\MediaProbe\Data\DataFormat;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\Model\ListItemValue;
use FileEye\MediaProbe\Model\MediaTypeBlockBase;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class for handling an image/jpeg MIME type data.
 */
class Jpeg extends MediaTypeBlockBase
{
    /**
     * JPEG delimiter.
     */
    const JPEG_DELIMITER = 0xFF;

    /**
     * JPEG header.
     */
    const JPEG_HEADER = "\xFF\xD8\xFF";

    public static function isDataMatchingMediaType(DataElement $dataElement): bool
    {
        return $dataElement->getBytes(0, 3) === static::JPEG_HEADER;
    }

    public function fromDataElement(DataElement $dataElement): Jpeg
    {
        $this->size = $dataElement->getSize();
        assert($this->debugInfo(['dataElement' => $dataElement]));

        // JPEG data is stored in big-endian format.
        $dataElement->setByteOrder(ConvertBytes::BIG_ENDIAN);

        // Run through the data to parse the segments in the image. After each
        // segment is parsed, the offset will be moved forward, and after the
        // last segment we will terminate.
        $offset = 0;
        $sosParsed = false;
        while ($offset < $dataElement->getSize()) {
            // Get the next JPEG segment id offset.
            try {
                $newOffset = $this->getJpegSegmentIdOffset($dataElement, $offset);
                $segmentId = $segmentId ?? 0;
                if ($newOffset !== $offset) {
                    // Add any trailing data from previous segment in a
                    // RawData block.
                    $this->error('Unexpected data found at end of JPEG segment {id}/{hexid} @ offset {offset}, size {size}', [
                        'id' => $segmentId,
                        'hexid' => '0x' . strtoupper(dechex($segmentId)),
                        'offset' => $dataElement->getAbsoluteOffset($offset),
                        'size' => $newOffset - $offset,
                    ]);
                    $trailCollection = CollectionFactory::get('RawData', ['name' => 'trail']);
                    $trailHandler = $trailCollection->handler();
                    $trail = new $trailHandler(
                        listItem: new ListItemValue($trailCollection, DataFormat::BYTE, $newOffset - $offset),
                        parent: $this,
                    );
                    $trail->fromDataElement(new DataWindow($dataElement, $offset, $newOffset - $offset));
                    assert($trail instanceof RawData);
                    $this->graftBlock($trail);
                }
                $offset = $newOffset;
            } catch (DataException $e) {
                $this->error($e->getMessage());
                return $this;
            }

            // Get the JPEG segment id.
            $segmentId = $dataElement->getByte($offset + 1);

            // Warn if an unidentified segment is detected.
            if (!in_array($segmentId, $this->collection->listItemIds())) {
                $this->warning('Invalid JPEG marker {id}/{hexid} found @ offset {offset}', [
                    'id' => $segmentId,
                    'hexid' => '0x' . strtoupper(dechex($segmentId)),
                    'offset' => $dataElement->getAbsoluteOffset($offset),
                ]);
            }

            // Get the JPEG segment size.
            $segmentCollection = $this->collection->getItemCollection($segmentId);

            $segmentSize = match ($segmentCollection->getPropertyValue('payload')) {
                // The data window size is the JPEG delimiter byte and the segment identifier byte.
                'none' => 2,
                // Read the length of the segment. The data window size includes the JPEG delimiter
                // byte, the segment identifier byte and two bytes used to store the segment
                // length.
                'variable' => $dataElement->getShort($offset + 2) + 2,
                // The data window size includes the JPEG delimiter byte and the segment identifier
                // byte.
                'fixed' => $segmentCollection->getPropertyValue('components') + 2,
                // In case of image scan segment, the window is to the end of the data.
                'scan' => null,
            };

            // Parse the MediaProbe JPEG segment data.
            $segmentHandler = $segmentCollection->handler();
            $segmentBlock = new $segmentHandler(
                collection: $segmentCollection,
                parent: $this,
            );
            assert($segmentBlock instanceof SegmentBase, get_class($segmentBlock));
            $segmentBlock->fromDataElement(new DataWindow($dataElement, $offset, $segmentSize));
            $this->graftBlock($segmentBlock);

            // Position to end of the segment.
            $offset += $segmentBlock->getSize();

            // There could be data after EOI, prepare to handle that.
            if ($segmentCollection->getPropertyValue('name') === 'SOS') {
                $sosParsed = true;
            } elseif ($sosParsed && $segmentCollection->getPropertyValue('name') === 'EOI') {
                break;
            }
        }

        // Now check to see if there are any trailing data.
        if ($offset < $dataElement->getSize()) {
            $raw_size = $dataElement->getSize() - $offset;
            $this->notice('Found trailing content after EOI: {size} bytes', ['size' => $raw_size]);
            // There is no JPEG marker for trailing garbage, so we just collect
            // the data in a RawData object.
            $trailCollection = CollectionFactory::get('RawData');
            $trailHandler = $trailCollection->handler();
            $trail = new $trailHandler(
                listItem: new ListItemValue($trailCollection, DataFormat::BYTE, $raw_size),
                parent: $this,
            );
            $trail->fromDataElement(new DataWindow($dataElement, $offset, $raw_size));
            assert($trail instanceof RawData);
            $this->graftBlock($trail);
        }

        // @todo move below to grafting
        // Fail if SOS is missing.
        if (!$this->getElement("jpegSegment[@name='SOS']")) {
            $this->error('Missing SOS (Start Of Scan) JPEG marker');
        }

        // Fail if EOI is missing.
        if (!$this->getElement("jpegSegment[@name='EOI']")) {
            $this->error('Missing EOI (End Of Image) JPEG marker');
        }

        return $this;
    }

    /**
     * Determines the offset where the next JPEG segment id is found.
     *
     * JPEG sections start with 0xFF. The first byte that is not 0xFF is a
     * marker (hopefully).
     *
     * @param DataElement $dataElement
     *   The data element to be checked.
     * @param int $offset
     *   The starting offset in the data element.
     *
     * @return int
     *   The found offset.
     *
     * @throws DataException
     *   In case of marker not found.
     */
    protected function getJpegSegmentIdOffset(DataElement $dataElement, int $offset): int
    {
        for ($i = $offset; $i < $offset + 128; $i++) {
            if ($dataElement->getByte($i) === static::JPEG_DELIMITER && $dataElement->getByte($i + 1) !== static::JPEG_DELIMITER) {
                return $i;
            }
        }
        throw new DataException('JPEG marker not found @%d', $dataElement->getAbsoluteOffset($offset));
    }
}
