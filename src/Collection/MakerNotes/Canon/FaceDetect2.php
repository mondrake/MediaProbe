<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\MakerNotes\Canon;

use FileEye\MediaProbe\Collection;

class FaceDetect2 extends Collection {

  protected static $map = array (
  'name' => 'CanonFaceDetect2',
  'title' => 'Canon FaceDetect2',
  'class' => 'FileEye\\MediaProbe\\Block\\Index',
  'DOMNode' => 'index',
  'format' =>
  array (
    0 => 1,
  ),
  'defaultItemCollection' => 'Tag',
  'itemsByName' =>
  array (
    'FaceWidth' => 1,
    'FacesDetected' => 2,
  ),
  'itemsByExiftoolDOMNode' =>
  array (
    'Canon:FaceWidth' => 1,
    'Canon:FacesDetected' => 2,
  ),
  'items' =>
  array (
    1 =>
    array (
      'collection' => 'Tag',
      'name' => 'FaceWidth',
      'title' => 'Face Width',
      'format' =>
      array (
        0 => 1,
      ),
      'exiftoolDOMNode' => 'Canon:FaceWidth',
    ),
    2 =>
    array (
      'collection' => 'Tag',
      'name' => 'FacesDetected',
      'title' => 'Faces Detected',
      'format' =>
      array (
        0 => 1,
      ),
      'exiftoolDOMNode' => 'Canon:FacesDetected',
    ),
  ),
);
}
