<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\MakerNotes\Canon;

use FileEye\MediaProbe\Collection;

class ColorCoefs extends Collection {

  protected static $map = array (
  'name' => 'CanonColorCoefs',
  'title' => 'Canon ColorCoefs',
  'class' => 'FileEye\\MediaProbe\\Block\\Exif\\Vendor\\Canon\\ColorCalibMap',
  'DOMNode' => 'index',
  'format' =>
  array (
    0 => 3,
  ),
  'defaultItemCollection' => 'Tag',
  'itemsByName' =>
  array (
    'ColorTempAsShot' => 4,
    'ColorTempAuto' => 9,
    'ColorTempCloudy' => 34,
    'ColorTempDaylight' => 24,
    'ColorTempFlash' => 54,
    'ColorTempFluorescent' => 44,
    'ColorTempKelvin' => 49,
    'ColorTempMeasured' => 14,
    'ColorTempShade' => 29,
    'ColorTempTungsten' => 39,
    'ColorTempUnknown' => 19,
    'ColorTempUnknown10' => 99,
    'ColorTempUnknown11' => 104,
    'ColorTempUnknown12' => 109,
    'ColorTempUnknown13' => 114,
    'ColorTempUnknown2' => 59,
    'ColorTempUnknown3' => 64,
    'ColorTempUnknown4' => 69,
    'ColorTempUnknown5' => 74,
    'ColorTempUnknown6' => 79,
    'ColorTempUnknown7' => 84,
    'ColorTempUnknown8' => 89,
    'ColorTempUnknown9' => 94,
    'WB_RGGBLevelsAsShot' => 0,
    'WB_RGGBLevelsAuto' => 5,
    'WB_RGGBLevelsCloudy' => 30,
    'WB_RGGBLevelsDaylight' => 20,
    'WB_RGGBLevelsFlash' => 50,
    'WB_RGGBLevelsFluorescent' => 40,
    'WB_RGGBLevelsKelvin' => 45,
    'WB_RGGBLevelsMeasured' => 10,
    'WB_RGGBLevelsShade' => 25,
    'WB_RGGBLevelsTungsten' => 35,
    'WB_RGGBLevelsUnknown' => 15,
    'WB_RGGBLevelsUnknown10' => 95,
    'WB_RGGBLevelsUnknown11' => 100,
    'WB_RGGBLevelsUnknown12' => 105,
    'WB_RGGBLevelsUnknown13' => 110,
    'WB_RGGBLevelsUnknown2' => 55,
    'WB_RGGBLevelsUnknown3' => 60,
    'WB_RGGBLevelsUnknown4' => 65,
    'WB_RGGBLevelsUnknown5' => 70,
    'WB_RGGBLevelsUnknown6' => 75,
    'WB_RGGBLevelsUnknown7' => 80,
    'WB_RGGBLevelsUnknown8' => 85,
    'WB_RGGBLevelsUnknown9' => 90,
  ),
  'itemsByExiftoolDOMNode' =>
  array (
    'Canon:ColorTempAsShot' => 4,
    'Canon:ColorTempAuto' => 9,
    'Canon:ColorTempCloudy' => 34,
    'Canon:ColorTempDaylight' => 24,
    'Canon:ColorTempFlash' => 54,
    'Canon:ColorTempFluorescent' => 44,
    'Canon:ColorTempKelvin' => 49,
    'Canon:ColorTempMeasured' => 14,
    'Canon:ColorTempShade' => 29,
    'Canon:ColorTempTungsten' => 39,
    'Canon:ColorTempUnknown' => 19,
    'Canon:ColorTempUnknown10' => 99,
    'Canon:ColorTempUnknown11' => 104,
    'Canon:ColorTempUnknown12' => 109,
    'Canon:ColorTempUnknown13' => 114,
    'Canon:ColorTempUnknown2' => 59,
    'Canon:ColorTempUnknown3' => 64,
    'Canon:ColorTempUnknown4' => 69,
    'Canon:ColorTempUnknown5' => 74,
    'Canon:ColorTempUnknown6' => 79,
    'Canon:ColorTempUnknown7' => 84,
    'Canon:ColorTempUnknown8' => 89,
    'Canon:ColorTempUnknown9' => 94,
    'Canon:WB_RGGBLevelsAsShot' => 0,
    'Canon:WB_RGGBLevelsAuto' => 5,
    'Canon:WB_RGGBLevelsCloudy' => 30,
    'Canon:WB_RGGBLevelsDaylight' => 20,
    'Canon:WB_RGGBLevelsFlash' => 50,
    'Canon:WB_RGGBLevelsFluorescent' => 40,
    'Canon:WB_RGGBLevelsKelvin' => 45,
    'Canon:WB_RGGBLevelsMeasured' => 10,
    'Canon:WB_RGGBLevelsShade' => 25,
    'Canon:WB_RGGBLevelsTungsten' => 35,
    'Canon:WB_RGGBLevelsUnknown' => 15,
    'Canon:WB_RGGBLevelsUnknown10' => 95,
    'Canon:WB_RGGBLevelsUnknown11' => 100,
    'Canon:WB_RGGBLevelsUnknown12' => 105,
    'Canon:WB_RGGBLevelsUnknown13' => 110,
    'Canon:WB_RGGBLevelsUnknown2' => 55,
    'Canon:WB_RGGBLevelsUnknown3' => 60,
    'Canon:WB_RGGBLevelsUnknown4' => 65,
    'Canon:WB_RGGBLevelsUnknown5' => 70,
    'Canon:WB_RGGBLevelsUnknown6' => 75,
    'Canon:WB_RGGBLevelsUnknown7' => 80,
    'Canon:WB_RGGBLevelsUnknown8' => 85,
    'Canon:WB_RGGBLevelsUnknown9' => 90,
  ),
  'items' =>
  array (
    0 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsAsShot',
      'title' => 'WB RGGB Levels As Shot',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsAsShot',
    ),
    4 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempAsShot',
      'title' => 'Color Temp As Shot',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempAsShot',
    ),
    5 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsAuto',
      'title' => 'WB RGGB Levels Auto',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsAuto',
    ),
    9 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempAuto',
      'title' => 'Color Temp Auto',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempAuto',
    ),
    10 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsMeasured',
      'title' => 'WB RGGB Levels Measured',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsMeasured',
    ),
    14 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempMeasured',
      'title' => 'Color Temp Measured',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempMeasured',
    ),
    15 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown',
      'title' => 'WB RGGB Levels Unknown',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown',
    ),
    19 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown',
      'title' => 'Color Temp Unknown',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown',
    ),
    20 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsDaylight',
      'title' => 'WB RGGB Levels Daylight',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsDaylight',
    ),
    24 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempDaylight',
      'title' => 'Color Temp Daylight',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempDaylight',
    ),
    25 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsShade',
      'title' => 'WB RGGB Levels Shade',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsShade',
    ),
    29 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempShade',
      'title' => 'Color Temp Shade',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempShade',
    ),
    30 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsCloudy',
      'title' => 'WB RGGB Levels Cloudy',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsCloudy',
    ),
    34 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempCloudy',
      'title' => 'Color Temp Cloudy',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempCloudy',
    ),
    35 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsTungsten',
      'title' => 'WB RGGB Levels Tungsten',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsTungsten',
    ),
    39 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempTungsten',
      'title' => 'Color Temp Tungsten',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempTungsten',
    ),
    40 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsFluorescent',
      'title' => 'WB RGGB Levels Fluorescent',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsFluorescent',
    ),
    44 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempFluorescent',
      'title' => 'Color Temp Fluorescent',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempFluorescent',
    ),
    45 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsKelvin',
      'title' => 'WB RGGB Levels Kelvin',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsKelvin',
    ),
    49 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempKelvin',
      'title' => 'Color Temp Kelvin',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempKelvin',
    ),
    50 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsFlash',
      'title' => 'WB RGGB Levels Flash',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsFlash',
    ),
    54 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempFlash',
      'title' => 'Color Temp Flash',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempFlash',
    ),
    55 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown2',
      'title' => 'WB RGGB Levels Unknown 2',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown2',
    ),
    59 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown2',
      'title' => 'Color Temp Unknown 2',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown2',
    ),
    60 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown3',
      'title' => 'WB RGGB Levels Unknown 3',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown3',
    ),
    64 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown3',
      'title' => 'Color Temp Unknown 3',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown3',
    ),
    65 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown4',
      'title' => 'WB RGGB Levels Unknown 4',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown4',
    ),
    69 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown4',
      'title' => 'Color Temp Unknown 4',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown4',
    ),
    70 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown5',
      'title' => 'WB RGGB Levels Unknown 5',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown5',
    ),
    74 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown5',
      'title' => 'Color Temp Unknown 5',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown5',
    ),
    75 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown6',
      'title' => 'WB RGGB Levels Unknown 6',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown6',
    ),
    79 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown6',
      'title' => 'Color Temp Unknown 6',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown6',
    ),
    80 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown7',
      'title' => 'WB RGGB Levels Unknown 7',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown7',
    ),
    84 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown7',
      'title' => 'Color Temp Unknown 7',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown7',
    ),
    85 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown8',
      'title' => 'WB RGGB Levels Unknown 8',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown8',
    ),
    89 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown8',
      'title' => 'Color Temp Unknown 8',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown8',
    ),
    90 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown9',
      'title' => 'WB RGGB Levels Unknown 9',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown9',
    ),
    94 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown9',
      'title' => 'Color Temp Unknown 9',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown9',
    ),
    95 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown10',
      'title' => 'WB RGGB Levels Unknown 10',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown10',
    ),
    99 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown10',
      'title' => 'Color Temp Unknown 10',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown10',
    ),
    100 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown11',
      'title' => 'WB RGGB Levels Unknown 11',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown11',
    ),
    104 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown11',
      'title' => 'Color Temp Unknown 11',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown11',
    ),
    105 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown12',
      'title' => 'WB RGGB Levels Unknown 12',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown12',
    ),
    109 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown12',
      'title' => 'Color Temp Unknown 12',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown12',
    ),
    110 =>
    array (
      'collection' => 'Tag',
      'name' => 'WB_RGGBLevelsUnknown13',
      'title' => 'WB RGGB Levels Unknown 13',
      'components' => 4,
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:WB_RGGBLevelsUnknown13',
    ),
    114 =>
    array (
      'collection' => 'Tag',
      'name' => 'ColorTempUnknown13',
      'title' => 'Color Temp Unknown 13',
      'format' =>
      array (
        0 => 8,
      ),
      'exiftoolDOMNode' => 'Canon:ColorTempUnknown13',
    ),
  ),
);
}
