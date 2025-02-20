<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\ExifMakerNotes\Canon;

use FileEye\MediaProbe\Collection\CollectionBase;

class VignettingCorr extends CollectionBase {

  protected static $map = array (
  'name' => 'CanonVignettingCorr',
  'title' => 'Canon VignettingCorr',
  'handler' => 'FileEye\\MediaProbe\\Block\\Index',
  'DOMNode' => 'index',
  'format' =>
  array (
    0 => 3,
  ),
  'defaultItemCollection' => 'Media\\Tiff\\Tag',
  'id' => 'ExifMakerNotes\\Canon\\VignettingCorr',
  'itemsByName' =>
  array (
    'ChromaticAberrationCorr' =>
    array (
      0 => 4,
      1 => 5,
    ),
    'DistortionCorrection' =>
    array (
      0 => 3,
    ),
    'DistortionCorrectionValue' =>
    array (
      0 => 9,
    ),
    'OriginalImageHeight' =>
    array (
      0 => 12,
    ),
    'OriginalImageWidth' =>
    array (
      0 => 11,
    ),
    'PeripheralLighting' =>
    array (
      0 => 2,
    ),
    'PeripheralLightingValue' =>
    array (
      0 => 6,
    ),
    'VignettingCorrVersion' =>
    array (
      0 => 0,
    ),
  ),
  'itemsByExiftoolDOMNode' =>
  array (
    'Canon:ChromaticAberrationCorr' =>
    array (
      0 => 4,
      1 => 5,
    ),
    'Canon:DistortionCorrection' =>
    array (
      0 => 3,
    ),
    'Canon:DistortionCorrectionValue' =>
    array (
      0 => 9,
    ),
    'Canon:OriginalImageHeight' =>
    array (
      0 => 12,
    ),
    'Canon:OriginalImageWidth' =>
    array (
      0 => 11,
    ),
    'Canon:PeripheralLighting' =>
    array (
      0 => 2,
    ),
    'Canon:PeripheralLightingValue' =>
    array (
      0 => 6,
    ),
    'Canon:VignettingCorrVersion' =>
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
        'exiftoolDOMNode' => 'Canon:VignettingCorrVersion',
      ),
    ),
    2 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PeripheralLighting',
        'title' => 'Peripheral Lighting',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Off',
            1 => 'On',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:PeripheralLighting',
      ),
    ),
    3 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'DistortionCorrection',
        'title' => 'Distortion Correction',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Off',
            1 => 'On',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:DistortionCorrection',
      ),
    ),
    4 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ChromaticAberrationCorr',
        'title' => 'Chromatic Aberration Corr',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Off',
            1 => 'On',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:ChromaticAberrationCorr',
      ),
    ),
    5 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ChromaticAberrationCorr',
        'title' => 'Chromatic Aberration Corr',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Off',
            1 => 'On',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:ChromaticAberrationCorr',
      ),
    ),
    6 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PeripheralLightingValue',
        'title' => 'Peripheral Lighting Value',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:PeripheralLightingValue',
      ),
    ),
    9 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'DistortionCorrectionValue',
        'title' => 'Distortion Correction Value',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:DistortionCorrectionValue',
      ),
    ),
    11 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OriginalImageWidth',
        'title' => 'Original Image Width',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:OriginalImageWidth',
      ),
    ),
    12 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OriginalImageHeight',
        'title' => 'Original Image Height',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:OriginalImageHeight',
      ),
    ),
  ),
);
}
