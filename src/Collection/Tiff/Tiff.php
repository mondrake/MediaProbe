<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\Tiff;

use FileEye\MediaProbe\Collection\CollectionBase;

class Tiff extends CollectionBase {

  protected static $map = array (
  'title' => 'TIFF image data',
  'DOMNode' => 'tiff',
  'mimeType' => 'image/tiff',
  'id' => 'Tiff\\Tiff',
  'handler' => 'FileEye\\MediaProbe\\Block\\Tiff\\Tiff',
  'items' =>
  array (
    0 =>
    array (
      0 =>
      array (
        'collection' => 'Tiff\\Ifd0',
      ),
    ),
    1 =>
    array (
      0 =>
      array (
        'collection' => 'Tiff\\Ifd1',
      ),
    ),
  ),
);
}
