<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\ExifMakerNotes\Canon;

use FileEye\MediaProbe\Collection\CollectionBase;

class VignettingCorrUnknown extends CollectionBase {

  protected static $map = array (
  'name' => 'CanonVignettingCorrUnknown',
  'title' => 'Canon VignettingCorrUnknown',
  'handler' => 'FileEye\\MediaProbe\\Block\\Index',
  'DOMNode' => 'index',
  'format' =>
  array (
    0 => 3,
  ),
  'defaultItemCollection' => 'Media\\Tiff\\Tag',
  'id' => 'ExifMakerNotes\\Canon\\VignettingCorrUnknown',
  'itemsByName' =>
  array (
    'VignettingCorrVersion' =>
    array (
      0 => 0,
    ),
  ),
  'items' =>
  array (
    0 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'VignettingCorrVersion',
        'title' => 'Vignetting Corr Version',
        'format' =>
        array (
          0 => 1,
        ),
      ),
    ),
  ),
);
}
