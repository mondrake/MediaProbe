<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\MakerNotes\CanonVRD;

use FileEye\MediaProbe\Collection;

class StampInfo extends Collection {

  protected static $map = array (
  'name' => 'CanonVRDStampInfo',
  'title' => 'CanonVRD StampInfo',
  'class' => 'tbd',
  'DOMNode' => 'tbd',
  'format' =>
  array (
    0 => 3,
  ),
  'defaultItemCollection' => 'Tag',
  'items' =>
  array (
    2 =>
    array (
      'collection' => 'Tag',
      'name' => 'StampToolCount',
      'title' => 'Stamp Tool Count',
      'format' =>
      array (
        0 => 4,
      ),
    ),
  ),
  'itemsByName' =>
  array (
    'StampToolCount' => 2,
  ),
);
}