<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\MakerNotes\CanonVRD;

use FileEye\MediaProbe\Collection;

class StampTool extends Collection {

  protected static $map = array (
  'name' => 'CanonVRDStampTool',
  'title' => 'CanonVRD StampTool',
  'class' => 'tbd',
  'DOMNode' => 'tbd',
  'format' =>
  array (
    0 => 3,
  ),
  'defaultItemCollection' => 'Tag',
  'itemsByName' =>
  array (
    'StampToolCount' => 0,
  ),
  'itemsByExiftoolDOMNode' =>
  array (
    'CanonVRD:StampToolCount' => 0,
  ),
  'items' =>
  array (
    0 =>
    array (
      'collection' => 'Tag',
      'name' => 'StampToolCount',
      'title' => 'Stamp Tool Count',
      'format' =>
      array (
        0 => 4,
      ),
      'exiftoolDOMNode' => 'CanonVRD:StampToolCount',
    ),
  ),
);
}
