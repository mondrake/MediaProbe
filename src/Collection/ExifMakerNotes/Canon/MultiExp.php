<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\ExifMakerNotes\Canon;

use FileEye\MediaProbe\Collection\CollectionBase;

class MultiExp extends CollectionBase {

  protected static $map = array (
  'name' => 'CanonMultiExp',
  'title' => 'Canon MultiExp',
  'handler' => 'FileEye\\MediaProbe\\Block\\Map',
  'DOMNode' => 'map',
  'format' =>
  array (
    0 => 4,
  ),
  'defaultItemCollection' => 'Media\\Tiff\\Tag',
  'id' => 'ExifMakerNotes\\Canon\\MultiExp',
  'itemsByName' =>
  array (
    'MultiExposure' =>
    array (
      0 => 1,
    ),
    'MultiExposureControl' =>
    array (
      0 => 2,
    ),
    'MultiExposureShots' =>
    array (
      0 => 3,
    ),
  ),
  'itemsByExiftoolDOMNode' =>
  array (
    'Canon:MultiExposure' =>
    array (
      0 => 1,
    ),
    'Canon:MultiExposureControl' =>
    array (
      0 => 2,
    ),
    'Canon:MultiExposureShots' =>
    array (
      0 => 3,
    ),
  ),
  'items' =>
  array (
    1 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MultiExposure',
        'title' => 'Multi Exposure',
        'format' =>
        array (
          0 => 9,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Off',
            1 => 'On',
            2 => 'On (RAW)',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:MultiExposure',
      ),
    ),
    2 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MultiExposureControl',
        'title' => 'Multi Exposure Control',
        'format' =>
        array (
          0 => 9,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Additive',
            1 => 'Average',
            2 => 'Bright (comparative)',
            3 => 'Dark (comparative)',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:MultiExposureControl',
      ),
    ),
    3 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MultiExposureShots',
        'title' => 'Multi Exposure Shots',
        'format' =>
        array (
          0 => 9,
        ),
        'exiftoolDOMNode' => 'Canon:MultiExposureShots',
      ),
    ),
  ),
);
}
