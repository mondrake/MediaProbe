<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\ExifMakerNotes\Canon;

use FileEye\MediaProbe\Collection\CollectionBase;

class CameraInfoPowerShot extends CollectionBase {

  protected static $map = array (
  'name' => 'CanonCameraInfoPowerShot',
  'title' => 'Canon CameraInfoPowerShot',
  'handler' => 'FileEye\\MediaProbe\\Block\\Exif\\Vendor\\Canon\\CameraInfoMap',
  'DOMNode' => 'map',
  'format' =>
  array (
    0 => 4,
  ),
  'defaultItemCollection' => 'Media\\Tiff\\Tag',
  'id' => 'ExifMakerNotes\\Canon\\CameraInfoPowerShot',
  'itemsByName' =>
  array (
    'CameraTemperature' =>
    array (
      0 => 135,
      1 => 145,
    ),
    'ExposureTime' =>
    array (
      0 => 6,
    ),
    'FNumber' =>
    array (
      0 => 5,
    ),
    'ISO' =>
    array (
      0 => 0,
    ),
    'Rotation' =>
    array (
      0 => 23,
    ),
  ),
  'itemsByExiftoolDOMNode' =>
  array (
    'Canon:CameraTemperature' =>
    array (
      0 => 135,
      1 => 145,
    ),
    'Canon:ExposureTime' =>
    array (
      0 => 6,
    ),
    'Canon:FNumber' =>
    array (
      0 => 5,
    ),
    'Canon:ISO' =>
    array (
      0 => 0,
    ),
    'Canon:Rotation' =>
    array (
      0 => 23,
    ),
  ),
  'items' =>
  array (
    0 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\CameraInfo\\ISO',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ISO',
        'title' => 'ISO',
        'format' =>
        array (
          0 => 9,
        ),
        'exiftoolDOMNode' => 'Canon:ISO',
      ),
    ),
    5 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\CameraInfo\\FNumber',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FNumber',
        'title' => 'F Number',
        'format' =>
        array (
          0 => 9,
        ),
        'exiftoolDOMNode' => 'Canon:FNumber',
      ),
    ),
    6 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\CameraInfo\\ExposureTime',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExposureTime',
        'title' => 'Exposure Time',
        'format' =>
        array (
          0 => 9,
        ),
        'exiftoolDOMNode' => 'Canon:ExposureTime',
      ),
    ),
    23 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Rotation',
        'title' => 'Rotation',
        'format' =>
        array (
          0 => 9,
        ),
        'exiftoolDOMNode' => 'Canon:Rotation',
      ),
    ),
    135 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\CameraInfo\\CameraTemperature',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CameraTemperature',
        'title' => 'Camera Temperature',
        'format' =>
        array (
          0 => 9,
        ),
        'exiftoolDOMNode' => 'Canon:CameraTemperature',
      ),
    ),
    145 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\CameraInfo\\CameraTemperature',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CameraTemperature',
        'title' => 'Camera Temperature',
        'format' =>
        array (
          0 => 9,
        ),
        'exiftoolDOMNode' => 'Canon:CameraTemperature',
      ),
    ),
  ),
);
}
