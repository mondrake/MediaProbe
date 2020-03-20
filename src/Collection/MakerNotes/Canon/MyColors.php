<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\MakerNotes\Canon;

use FileEye\MediaProbe\Collection;

class MyColors extends Collection {

  protected static $map = array (
  'name' => 'CanonMyColors',
  'title' => 'Canon MyColors',
  'class' => 'FileEye\\MediaProbe\\Block\\Index',
  'DOMNode' => 'index',
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
      'name' => 'MyColorMode',
      'title' => 'My Color Mode',
      'format' =>
      array (
        0 => 3,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => 'Off',
          1 => 'Positive Film',
          2 => 'Light Skin Tone',
          3 => 'Dark Skin Tone',
          4 => 'Vivid Blue',
          5 => 'Vivid Green',
          6 => 'Vivid Red',
          7 => 'Color Accent',
          8 => 'Color Swap',
          9 => 'Custom',
          12 => 'Vivid',
          13 => 'Neutral',
          14 => 'Sepia',
          15 => 'B&W',
        ),
      ),
    ),
  ),
  'itemsByName' =>
  array (
    'MyColorMode' => 2,
  ),
);
}