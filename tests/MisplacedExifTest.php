<?php

namespace FileEye\MediaProbe\Test;

use FileEye\MediaProbe\Block\Jpeg\Exif;
use FileEye\MediaProbe\Block\Jpeg\SegmentApp1;
use FileEye\MediaProbe\Collection\CollectionFactory;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Media;

class MisplacedExifTest extends MediaProbeTestCaseBase
{
    // NOTE: this test relies on the assumption that internal Jpeg::sections order is kept between segment
    // manipulations. It may fail it this changes.
    public function testRead()
    {
        // Image contains non-EXIF APP1 segment ahead of the EXIF one.
        $media = Media::createFromFile(dirname(__FILE__) . '/media-samples/image/broken/misplaced-exif.jpg');
        $jpeg = $media->getElement("jpeg");

        // Assert we just have loaded correct file for the test.
        $app1 = $jpeg->getMultipleElements("jpegSegment[@name='APP1']");
        $this->assertCount(2, $app1);
        $this->assertNull($app1[0]->getElement("exif"));
        $this->assertInstanceOf(Exif::class, $app1[1]->getElement("exif"));

        // Add a new APP1 segment.
        $app1_segment_definition = new ItemDefinition(CollectionFactory::get('Jpeg\SegmentApp1'));
        $app1_segment = new SegmentApp1($app1_segment_definition, $jpeg);
        $exif_definition = new ItemDefinition(CollectionFactory::get('Jpeg\Exif'));
        $newExif = new Exif($exif_definition, $app1_segment);

        // Ensure new APP1 segment is set to correct position among segments.
        $app1 = $jpeg->getMultipleElements("jpegSegment[@name='APP1']");
        $this->assertCount(3, $app1);
        $this->assertNull($app1[0]->getElement("exif"));
        $this->assertInstanceOf(Exif::class, $app1[1]->getElement("exif"));
        $this->assertInstanceOf(Exif::class, $app1[2]->getElement("exif"));
        $this->assertSame($newExif, $app1[2]->getElement("exif"));

        // Remove the first APP1 segment containing a valid EXIF block.
        $jpeg->removeElement("jpegSegment[exif][1]");

        // Assert that only EXIF section is gone and all other shifted correctly.
        $app1 = $jpeg->getMultipleElements("jpegSegment[@name='APP1']");
        $this->assertCount(2, $app1);
        $this->assertNull($app1[0]->getElement("exif"));
        $this->assertInstanceOf(Exif::class, $app1[1]->getElement("exif"));
        $this->assertSame($newExif, $app1[1]->getElement("exif"));
    }
}
