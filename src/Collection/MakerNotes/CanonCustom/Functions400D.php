<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\MakerNotes\CanonCustom;

use FileEye\MediaProbe\Collection;

class Functions400D extends Collection {

  protected static $map = array (
  'name' => 'CanonCustomFunctions400D',
  'title' => 'CanonCustom Functions400D',
  'class' => 'tbd',
  'DOMNode' => 'tbd',
  'format' =>
  array (
    0 => 3,
  ),
  'defaultItemCollection' => 'Tag',
  'items' =>
  array (
    0 =>
    array (
      'collection' => 'Tag',
      'name' => 'SetButtonCrossKeysFunc',
      'title' => 'Set Button Cross Keys Func',
      'format' =>
      array (
        0 => 1,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => 'Set: Picture Style',
          1 => 'Set: Quality',
          2 => 'Set: Flash Exposure Comp',
          3 => 'Set: Playback',
          4 => 'Cross keys: AF point select',
        ),
      ),
    ),
    1 =>
    array (
      'collection' => 'Tag',
      'name' => 'LongExposureNoiseReduction',
      'title' => 'Long Exposure Noise Reduction',
      'format' =>
      array (
        0 => 1,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => 'Off',
          1 => 'Auto',
          2 => 'On',
        ),
      ),
    ),
    2 =>
    array (
      'collection' => 'Tag',
      'name' => 'FlashSyncSpeedAv',
      'title' => 'Flash Sync Speed Av',
      'format' =>
      array (
        0 => 1,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => 'Auto',
          1 => '1/200 Fixed',
        ),
      ),
    ),
    3 =>
    array (
      'collection' => 'Tag',
      'name' => 'Shutter-AELock',
      'title' => 'Shutter-AE Lock',
      'format' =>
      array (
        0 => 1,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => 'AF/AE lock',
          1 => 'AE lock/AF',
          2 => 'AF/AF lock, No AE lock',
          3 => 'AE/AF, No AE lock',
        ),
      ),
    ),
    4 =>
    array (
      'collection' => 'Tag',
      'name' => 'AFAssistBeam',
      'title' => 'AF Assist Beam',
      'format' =>
      array (
        0 => 1,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => 'Emits',
          1 => 'Does not emit',
          2 => 'Only ext. flash emits',
        ),
      ),
    ),
    5 =>
    array (
      'collection' => 'Tag',
      'name' => 'ExposureLevelIncrements',
      'title' => 'Exposure Level Increments',
      'format' =>
      array (
        0 => 1,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => '1/3 Stop',
          1 => '1/2 Stop',
        ),
      ),
    ),
    6 =>
    array (
      'collection' => 'Tag',
      'name' => 'MirrorLockup',
      'title' => 'Mirror Lockup',
      'format' =>
      array (
        0 => 1,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => 'Disable',
          1 => 'Enable',
        ),
      ),
    ),
    7 =>
    array (
      'collection' => 'Tag',
      'name' => 'ETTLII',
      'title' => 'E-TTL II',
      'format' =>
      array (
        0 => 1,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => 'Evaluative',
          1 => 'Average',
        ),
      ),
    ),
    8 =>
    array (
      'collection' => 'Tag',
      'name' => 'ShutterCurtainSync',
      'title' => 'Shutter Curtain Sync',
      'format' =>
      array (
        0 => 1,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => '1st-curtain sync',
          1 => '2nd-curtain sync',
        ),
      ),
    ),
    9 =>
    array (
      'collection' => 'Tag',
      'name' => 'MagnifiedView',
      'title' => 'Magnified View',
      'format' =>
      array (
        0 => 1,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => 'Image playback only',
          1 => 'Image review and playback',
        ),
      ),
    ),
    10 =>
    array (
      'collection' => 'Tag',
      'name' => 'LCDDisplayAtPowerOn',
      'title' => 'LCD Display At Power On',
      'format' =>
      array (
        0 => 1,
      ),
      'text' =>
      array (
        'mapping' =>
        array (
          0 => 'Display',
          1 => 'Retain power off status',
        ),
      ),
    ),
  ),
  'itemsByName' =>
  array (
    'AFAssistBeam' => 4,
    'ETTLII' => 7,
    'ExposureLevelIncrements' => 5,
    'FlashSyncSpeedAv' => 2,
    'LCDDisplayAtPowerOn' => 10,
    'LongExposureNoiseReduction' => 1,
    'MagnifiedView' => 9,
    'MirrorLockup' => 6,
    'SetButtonCrossKeysFunc' => 0,
    'Shutter-AELock' => 3,
    'ShutterCurtainSync' => 8,
  ),
);
}