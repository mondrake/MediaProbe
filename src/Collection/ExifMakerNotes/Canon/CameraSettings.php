<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\ExifMakerNotes\Canon;

use FileEye\MediaProbe\Collection\CollectionBase;

class CameraSettings extends CollectionBase {

  protected static $map = array (
  'name' => 'CanonCameraSettings',
  'title' => 'Canon Camera Settings',
  'handler' => 'FileEye\\MediaProbe\\Block\\Map',
  'DOMNode' => 'map',
  'hasIndexSize' => true,
  'format' =>
  array (
    0 => 3,
  ),
  'defaultItemCollection' => 'Media\\Tiff\\Tag',
  'id' => 'ExifMakerNotes\\Canon\\CameraSettings',
  'itemsByName' =>
  array (
    'AESetting' =>
    array (
      0 => 33,
    ),
    'AFPoint' =>
    array (
      0 => 19,
    ),
    'CameraISO' =>
    array (
      0 => 16,
    ),
    'CanonExposureMode' =>
    array (
      0 => 20,
    ),
    'CanonFlashMode' =>
    array (
      0 => 4,
    ),
    'CanonImageSize' =>
    array (
      0 => 10,
    ),
    'Clarity' =>
    array (
      0 => 51,
    ),
    'ColorTone' =>
    array (
      0 => 42,
    ),
    'ContinuousDrive' =>
    array (
      0 => 5,
    ),
    'Contrast' =>
    array (
      0 => 13,
    ),
    'DigitalZoom' =>
    array (
      0 => 12,
    ),
    'DisplayAperture' =>
    array (
      0 => 35,
    ),
    'EasyMode' =>
    array (
      0 => 11,
    ),
    'FlashActivity' =>
    array (
      0 => 28,
    ),
    'FlashBits' =>
    array (
      0 => 29,
    ),
    'FocalUnits' =>
    array (
      0 => 25,
    ),
    'FocusContinuous' =>
    array (
      0 => 32,
    ),
    'FocusMode' =>
    array (
      0 => 7,
    ),
    'FocusRange' =>
    array (
      0 => 18,
    ),
    'ImageStabilization' =>
    array (
      0 => 34,
    ),
    'LensType' =>
    array (
      0 => 22,
    ),
    'MacroMode' =>
    array (
      0 => 1,
    ),
    'ManualFlashOutput' =>
    array (
      0 => 41,
    ),
    'MaxAperture' =>
    array (
      0 => 26,
    ),
    'MaxFocalLength' =>
    array (
      0 => 23,
    ),
    'MeteringMode' =>
    array (
      0 => 17,
    ),
    'MinAperture' =>
    array (
      0 => 27,
    ),
    'MinFocalLength' =>
    array (
      0 => 24,
    ),
    'PhotoEffect' =>
    array (
      0 => 40,
    ),
    'Quality' =>
    array (
      0 => 3,
    ),
    'RecordMode' =>
    array (
      0 => 9,
    ),
    'SRAWQuality' =>
    array (
      0 => 46,
    ),
    'Saturation' =>
    array (
      0 => 14,
    ),
    'SelfTimer' =>
    array (
      0 => 2,
    ),
    'Sharpness' =>
    array (
      0 => 15,
    ),
    'SpotMeteringMode' =>
    array (
      0 => 39,
    ),
    'ZoomSourceWidth' =>
    array (
      0 => 36,
    ),
    'ZoomTargetWidth' =>
    array (
      0 => 37,
    ),
  ),
  'itemsByExiftoolDOMNode' =>
  array (
    'Canon:AESetting' =>
    array (
      0 => 33,
    ),
    'Canon:AFPoint' =>
    array (
      0 => 19,
    ),
    'Canon:CameraISO' =>
    array (
      0 => 16,
    ),
    'Canon:CanonExposureMode' =>
    array (
      0 => 20,
    ),
    'Canon:CanonFlashMode' =>
    array (
      0 => 4,
    ),
    'Canon:CanonImageSize' =>
    array (
      0 => 10,
    ),
    'Canon:Clarity' =>
    array (
      0 => 51,
    ),
    'Canon:ColorTone' =>
    array (
      0 => 42,
    ),
    'Canon:ContinuousDrive' =>
    array (
      0 => 5,
    ),
    'Canon:Contrast' =>
    array (
      0 => 13,
    ),
    'Canon:DigitalZoom' =>
    array (
      0 => 12,
    ),
    'Canon:DisplayAperture' =>
    array (
      0 => 35,
    ),
    'Canon:EasyMode' =>
    array (
      0 => 11,
    ),
    'Canon:FlashActivity' =>
    array (
      0 => 28,
    ),
    'Canon:FlashBits' =>
    array (
      0 => 29,
    ),
    'Canon:FocalUnits' =>
    array (
      0 => 25,
    ),
    'Canon:FocusContinuous' =>
    array (
      0 => 32,
    ),
    'Canon:FocusMode' =>
    array (
      0 => 7,
    ),
    'Canon:FocusRange' =>
    array (
      0 => 18,
    ),
    'Canon:ImageStabilization' =>
    array (
      0 => 34,
    ),
    'Canon:LensType' =>
    array (
      0 => 22,
    ),
    'Canon:MacroMode' =>
    array (
      0 => 1,
    ),
    'Canon:ManualFlashOutput' =>
    array (
      0 => 41,
    ),
    'Canon:MaxAperture' =>
    array (
      0 => 26,
    ),
    'Canon:MaxFocalLength' =>
    array (
      0 => 23,
    ),
    'Canon:MeteringMode' =>
    array (
      0 => 17,
    ),
    'Canon:MinAperture' =>
    array (
      0 => 27,
    ),
    'Canon:MinFocalLength' =>
    array (
      0 => 24,
    ),
    'Canon:PhotoEffect' =>
    array (
      0 => 40,
    ),
    'Canon:Quality' =>
    array (
      0 => 3,
    ),
    'Canon:RecordMode' =>
    array (
      0 => 9,
    ),
    'Canon:SRAWQuality' =>
    array (
      0 => 46,
    ),
    'Canon:Saturation' =>
    array (
      0 => 14,
    ),
    'Canon:SelfTimer' =>
    array (
      0 => 2,
    ),
    'Canon:Sharpness' =>
    array (
      0 => 15,
    ),
    'Canon:SpotMeteringMode' =>
    array (
      0 => 39,
    ),
    'Canon:ZoomSourceWidth' =>
    array (
      0 => 36,
    ),
    'Canon:ZoomTargetWidth' =>
    array (
      0 => 37,
    ),
  ),
  'items' =>
  array (
    1 =>
    array (
      0 =>
      array (
        'text' =>
        array (
          'default' => 'Unknown ({value})',
          'mapping' =>
          array (
            1 => 'Macro',
            2 => 'Normal',
          ),
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MacroMode',
        'title' => 'Macro Mode',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:MacroMode',
      ),
    ),
    2 =>
    array (
      0 =>
      array (
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Off',
          ),
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SelfTimer',
        'title' => 'Self Timer',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:SelfTimer',
      ),
    ),
    3 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Quality',
        'title' => 'Quality',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            -1 => 'n/a',
            1 => 'Economy',
            2 => 'Normal',
            3 => 'Fine',
            4 => 'RAW',
            5 => 'Superfine',
            7 => 'CRAW',
            130 => 'Light (RAW)',
            131 => 'Standard (RAW)',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:Quality',
      ),
    ),
    4 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CanonFlashMode',
        'title' => 'Canon Flash Mode',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            -1 => 'n/a',
            0 => 'Off',
            1 => 'Auto',
            2 => 'On',
            3 => 'Red-eye reduction',
            4 => 'Slow-sync',
            5 => 'Red-eye reduction (Auto)',
            6 => 'Red-eye reduction (On)',
            16 => 'External flash',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:CanonFlashMode',
      ),
    ),
    5 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ContinuousDrive',
        'title' => 'Continuous Drive',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Single',
            1 => 'Continuous',
            2 => 'Movie',
            3 => 'Continuous, Speed Priority',
            4 => 'Continuous, Low',
            5 => 'Continuous, High',
            6 => 'Silent Single',
            8 => 'Continuous, High+',
            9 => 'Single, Silent',
            10 => 'Continuous, Silent',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:ContinuousDrive',
      ),
    ),
    7 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocusMode',
        'title' => 'Focus Mode',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'One-shot AF',
            1 => 'AI Servo AF',
            2 => 'AI Focus AF',
            3 => 'Manual Focus (3)',
            4 => 'Single',
            5 => 'Continuous',
            6 => 'Manual Focus (6)',
            16 => 'Pan Focus',
            256 => 'One-shot AF (Live View)',
            257 => 'AI Servo AF (Live View)',
            258 => 'AI Focus AF (Live View)',
            512 => 'Movie Snap Focus',
            519 => 'Movie Servo AF',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:FocusMode',
      ),
    ),
    9 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'RecordMode',
        'title' => 'Record Mode',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            1 => 'JPEG',
            2 => 'CRW+THM',
            3 => 'AVI+THM',
            4 => 'TIF',
            5 => 'TIF+JPEG',
            6 => 'CR2',
            7 => 'CR2+JPEG',
            9 => 'MOV',
            10 => 'MP4',
            11 => 'CRM',
            12 => 'CR3',
            13 => 'CR3+JPEG',
            14 => 'HIF',
            15 => 'CR3+HIF',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:RecordMode',
      ),
    ),
    10 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CanonImageSize',
        'title' => 'Canon Image Size',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            -1 => 'n/a',
            0 => 'Large',
            1 => 'Medium',
            2 => 'Small',
            5 => 'Medium 1',
            6 => 'Medium 2',
            7 => 'Medium 3',
            8 => 'Postcard',
            9 => 'Widescreen',
            10 => 'Medium Widescreen',
            14 => 'Small 1',
            15 => 'Small 2',
            16 => 'Small 3',
            128 => '640x480 Movie',
            129 => 'Medium Movie',
            130 => 'Small Movie',
            137 => '1280x720 Movie',
            142 => '1920x1080 Movie',
            143 => '4096x2160 Movie',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:CanonImageSize',
      ),
    ),
    11 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'EasyMode',
        'title' => 'Easy Mode',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Full auto',
            1 => 'Manual',
            2 => 'Landscape',
            3 => 'Fast shutter',
            4 => 'Slow shutter',
            5 => 'Night',
            6 => 'Gray Scale',
            7 => 'Sepia',
            8 => 'Portrait',
            9 => 'Sports',
            10 => 'Macro',
            11 => 'Black & White',
            12 => 'Pan focus',
            13 => 'Vivid',
            14 => 'Neutral',
            15 => 'Flash Off',
            16 => 'Long Shutter',
            17 => 'Super Macro',
            18 => 'Foliage',
            19 => 'Indoor',
            20 => 'Fireworks',
            21 => 'Beach',
            22 => 'Underwater',
            23 => 'Snow',
            24 => 'Kids & Pets',
            25 => 'Night Snapshot',
            26 => 'Digital Macro',
            27 => 'My Colors',
            28 => 'Movie Snap',
            29 => 'Super Macro 2',
            30 => 'Color Accent',
            31 => 'Color Swap',
            32 => 'Aquarium',
            33 => 'ISO 3200',
            34 => 'ISO 6400',
            35 => 'Creative Light Effect',
            36 => 'Easy',
            37 => 'Quick Shot',
            38 => 'Creative Auto',
            39 => 'Zoom Blur',
            40 => 'Low Light',
            41 => 'Nostalgic',
            42 => 'Super Vivid',
            43 => 'Poster Effect',
            44 => 'Face Self-timer',
            45 => 'Smile',
            46 => 'Wink Self-timer',
            47 => 'Fisheye Effect',
            48 => 'Miniature Effect',
            49 => 'High-speed Burst',
            50 => 'Best Image Selection',
            51 => 'High Dynamic Range',
            52 => 'Handheld Night Scene',
            53 => 'Movie Digest',
            54 => 'Live View Control',
            55 => 'Discreet',
            56 => 'Blur Reduction',
            57 => 'Monochrome',
            58 => 'Toy Camera Effect',
            59 => 'Scene Intelligent Auto',
            60 => 'High-speed Burst HQ',
            61 => 'Smooth Skin',
            62 => 'Soft Focus',
            68 => 'Food',
            84 => 'HDR Art Standard',
            85 => 'HDR Art Vivid',
            93 => 'HDR Art Bold',
            257 => 'Spotlight',
            258 => 'Night 2',
            259 => 'Night+',
            260 => 'Super Night',
            261 => 'Sunset',
            263 => 'Night Scene',
            264 => 'Surface',
            265 => 'Low Light 2',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:EasyMode',
      ),
    ),
    12 =>
    array (
      0 =>
      array (
        'text' =>
        array (
          'default' => 'Unknown ({value})',
          'mapping' =>
          array (
            0 => 'None',
            1 => '2x',
            2 => '4x',
            3 => 'Other',
          ),
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'DigitalZoom',
        'title' => 'Digital Zoom',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:DigitalZoom',
      ),
    ),
    13 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\Contrast',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Contrast',
        'title' => 'Contrast',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Normal',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:Contrast',
      ),
    ),
    14 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\Saturation',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Saturation',
        'title' => 'Saturation',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Normal',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:Saturation',
      ),
    ),
    15 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\Sharpness',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Sharpness',
        'title' => 'Sharpness',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:Sharpness',
      ),
    ),
    16 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\CameraISO',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CameraISO',
        'title' => 'Camera ISO',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:CameraISO',
      ),
    ),
    17 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MeteringMode',
        'title' => 'Metering Mode',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Default',
            1 => 'Spot',
            2 => 'Average',
            3 => 'Evaluative',
            4 => 'Partial',
            5 => 'Center-weighted average',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:MeteringMode',
      ),
    ),
    18 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocusRange',
        'title' => 'Focus Range',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Manual',
            1 => 'Auto',
            2 => 'Not Known',
            3 => 'Macro',
            4 => 'Very Close',
            5 => 'Close',
            6 => 'Middle Range',
            7 => 'Far Range',
            8 => 'Pan Focus',
            9 => 'Super Macro',
            10 => 'Infinity',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:FocusRange',
      ),
    ),
    19 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'AFPoint',
        'title' => 'AF Point',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            8197 => 'Manual AF point selection',
            12288 => 'None (MF)',
            12289 => 'Auto AF point selection',
            12290 => 'Right',
            12291 => 'Center',
            12292 => 'Left',
            16385 => 'Auto AF point selection',
            16390 => 'Face Detect',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:AFPoint',
      ),
    ),
    20 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CanonExposureMode',
        'title' => 'Canon Exposure Mode',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Easy',
            1 => 'Program AE',
            2 => 'Shutter speed priority AE',
            3 => 'Aperture-priority AE',
            4 => 'Manual',
            5 => 'Depth-of-field AE',
            6 => 'M-Dep',
            7 => 'Bulb',
            8 => 'Flexible-priority AE',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:CanonExposureMode',
      ),
    ),
    22 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\CameraSettingsLensType',
        'text' =>
        array (
          'default' => 'Unknown ({value})',
          'mapping' =>
          array (
            -1 => 'n/a',
            1 => 'Canon EF 50mm f/1.8',
            2 => 'Canon EF 28mm f/2.8 or Sigma Lens',
            '2.1' => 'Sigma 24mm f/2.8 Super Wide II',
            3 => 'Canon EF 135mm f/2.8 Soft',
            4 => 'Canon EF 35-105mm f/3.5-4.5 or Sigma Lens',
            '4.1' => 'Sigma UC Zoom 35-135mm f/4-5.6',
            5 => 'Canon EF 35-70mm f/3.5-4.5',
            6 => 'Canon EF 28-70mm f/3.5-4.5 or Sigma or Tokina Lens',
            '6.1' => 'Sigma 18-50mm f/3.5-5.6 DC',
            '6.2' => 'Sigma 18-125mm f/3.5-5.6 DC IF ASP',
            '6.3' => 'Tokina AF 193-2 19-35mm f/3.5-4.5',
            '6.4' => 'Sigma 28-80mm f/3.5-5.6 II Macro',
            '6.5' => 'Sigma 28-300mm f/3.5-6.3 DG Macro',
            7 => 'Canon EF 100-300mm f/5.6L',
            8 => 'Canon EF 100-300mm f/5.6 or Sigma or Tokina Lens',
            '8.1' => 'Sigma 70-300mm f/4-5.6 [APO] DG Macro',
            '8.2' => 'Tokina AT-X 242 AF 24-200mm f/3.5-5.6',
            9 => 'Canon EF 70-210mm f/4',
            '9.1' => 'Sigma 55-200mm f/4-5.6 DC',
            10 => 'Canon EF 50mm f/2.5 Macro or Sigma Lens',
            '10.1' => 'Sigma 50mm f/2.8 EX',
            '10.2' => 'Sigma 28mm f/1.8',
            '10.3' => 'Sigma 105mm f/2.8 Macro EX',
            '10.4' => 'Sigma 70mm f/2.8 EX DG Macro EF',
            11 => 'Canon EF 35mm f/2',
            13 => 'Canon EF 15mm f/2.8 Fisheye',
            14 => 'Canon EF 50-200mm f/3.5-4.5L',
            15 => 'Canon EF 50-200mm f/3.5-4.5',
            16 => 'Canon EF 35-135mm f/3.5-4.5',
            17 => 'Canon EF 35-70mm f/3.5-4.5A',
            18 => 'Canon EF 28-70mm f/3.5-4.5',
            20 => 'Canon EF 100-200mm f/4.5A',
            21 => 'Canon EF 80-200mm f/2.8L',
            22 => 'Canon EF 20-35mm f/2.8L or Tokina Lens',
            '22.1' => 'Tokina AT-X 280 AF Pro 28-80mm f/2.8 Aspherical',
            23 => 'Canon EF 35-105mm f/3.5-4.5',
            24 => 'Canon EF 35-80mm f/4-5.6 Power Zoom',
            25 => 'Canon EF 35-80mm f/4-5.6 Power Zoom',
            26 => 'Canon EF 100mm f/2.8 Macro or Other Lens',
            '26.1' => 'Cosina 100mm f/3.5 Macro AF',
            '26.2' => 'Tamron SP AF 90mm f/2.8 Di Macro',
            '26.3' => 'Tamron SP AF 180mm f/3.5 Di Macro',
            '26.4' => 'Carl Zeiss Planar T* 50mm f/1.4',
            '26.5' => 'Voigtlander APO Lanthar 125mm F2.5 SL Macro',
            '26.6' => 'Carl Zeiss Planar T 85mm f/1.4 ZE',
            27 => 'Canon EF 35-80mm f/4-5.6',
            28 => 'Canon EF 80-200mm f/4.5-5.6 or Tamron Lens',
            '28.1' => 'Tamron SP AF 28-105mm f/2.8 LD Aspherical IF',
            '28.2' => 'Tamron SP AF 28-75mm f/2.8 XR Di LD Aspherical [IF] Macro',
            '28.3' => 'Tamron AF 70-300mm f/4-5.6 Di LD 1:2 Macro',
            '28.4' => 'Tamron AF Aspherical 28-200mm f/3.8-5.6',
            29 => 'Canon EF 50mm f/1.8 II',
            30 => 'Canon EF 35-105mm f/4.5-5.6',
            31 => 'Canon EF 75-300mm f/4-5.6 or Tamron Lens',
            '31.1' => 'Tamron SP AF 300mm f/2.8 LD IF',
            32 => 'Canon EF 24mm f/2.8 or Sigma Lens',
            '32.1' => 'Sigma 15mm f/2.8 EX Fisheye',
            33 => 'Voigtlander or Carl Zeiss Lens',
            '33.1' => 'Voigtlander Ultron 40mm f/2 SLII Aspherical',
            '33.2' => 'Voigtlander Color Skopar 20mm f/3.5 SLII Aspherical',
            '33.3' => 'Voigtlander APO-Lanthar 90mm f/3.5 SLII Close Focus',
            '33.4' => 'Carl Zeiss Distagon T* 15mm f/2.8 ZE',
            '33.5' => 'Carl Zeiss Distagon T* 18mm f/3.5 ZE',
            '33.6' => 'Carl Zeiss Distagon T* 21mm f/2.8 ZE',
            '33.7' => 'Carl Zeiss Distagon T* 25mm f/2 ZE',
            '33.8' => 'Carl Zeiss Distagon T* 28mm f/2 ZE',
            '33.9' => 'Carl Zeiss Distagon T* 35mm f/2 ZE',
            '33.10' => 'Carl Zeiss Distagon T* 35mm f/1.4 ZE',
            '33.11' => 'Carl Zeiss Planar T* 50mm f/1.4 ZE',
            '33.12' => 'Carl Zeiss Makro-Planar T* 50mm f/2 ZE',
            '33.13' => 'Carl Zeiss Makro-Planar T* 100mm f/2 ZE',
            '33.14' => 'Carl Zeiss Apo-Sonnar T* 135mm f/2 ZE',
            35 => 'Canon EF 35-80mm f/4-5.6',
            36 => 'Canon EF 38-76mm f/4.5-5.6',
            37 => 'Canon EF 35-80mm f/4-5.6 or Tamron Lens',
            '37.1' => 'Tamron 70-200mm f/2.8 Di LD IF Macro',
            '37.2' => 'Tamron AF 28-300mm f/3.5-6.3 XR Di VC LD Aspherical [IF] Macro (A20)',
            '37.3' => 'Tamron SP AF 17-50mm f/2.8 XR Di II VC LD Aspherical [IF]',
            '37.4' => 'Tamron AF 18-270mm f/3.5-6.3 Di II VC LD Aspherical [IF] Macro',
            38 => 'Canon EF 80-200mm f/4.5-5.6 II',
            39 => 'Canon EF 75-300mm f/4-5.6',
            40 => 'Canon EF 28-80mm f/3.5-5.6',
            41 => 'Canon EF 28-90mm f/4-5.6',
            42 => 'Canon EF 28-200mm f/3.5-5.6 or Tamron Lens',
            '42.1' => 'Tamron AF 28-300mm f/3.5-6.3 XR Di VC LD Aspherical [IF] Macro (A20)',
            43 => 'Canon EF 28-105mm f/4-5.6',
            44 => 'Canon EF 90-300mm f/4.5-5.6',
            45 => 'Canon EF-S 18-55mm f/3.5-5.6 [II]',
            46 => 'Canon EF 28-90mm f/4-5.6',
            47 => 'Zeiss Milvus 35mm f/2 or 50mm f/2',
            '47.1' => 'Zeiss Milvus 50mm f/2 Makro',
            '47.2' => 'Zeiss Milvus 135mm f/2 ZE',
            48 => 'Canon EF-S 18-55mm f/3.5-5.6 IS',
            49 => 'Canon EF-S 55-250mm f/4-5.6 IS',
            50 => 'Canon EF-S 18-200mm f/3.5-5.6 IS',
            51 => 'Canon EF-S 18-135mm f/3.5-5.6 IS',
            52 => 'Canon EF-S 18-55mm f/3.5-5.6 IS II',
            53 => 'Canon EF-S 18-55mm f/3.5-5.6 III',
            54 => 'Canon EF-S 55-250mm f/4-5.6 IS II',
            60 => 'Irix 11mm f/4 or 15mm f/2.4',
            '60.1' => 'Irix 15mm f/2.4',
            63 => 'Irix 30mm F1.4 Dragonfly',
            80 => 'Canon TS-E 50mm f/2.8L Macro',
            81 => 'Canon TS-E 90mm f/2.8L Macro',
            82 => 'Canon TS-E 135mm f/4L Macro',
            94 => 'Canon TS-E 17mm f/4L',
            95 => 'Canon TS-E 24mm f/3.5L II',
            103 => 'Samyang AF 14mm f/2.8 EF or Rokinon Lens',
            '103.1' => 'Rokinon SP 14mm f/2.4',
            '103.2' => 'Rokinon AF 14mm f/2.8 EF',
            106 => 'Rokinon SP / Samyang XP 35mm f/1.2',
            112 => 'Sigma 28mm f/1.5 FF High-speed Prime or other Sigma Lens',
            '112.1' => 'Sigma 40mm f/1.5 FF High-speed Prime',
            '112.2' => 'Sigma 105mm f/1.5 FF High-speed Prime',
            117 => 'Tamron 35-150mm f/2.8-4.0 Di VC OSD (A043) or other Tamron Lens',
            '117.1' => 'Tamron SP 35mm f/1.4 Di USD (F045)',
            124 => 'Canon MP-E 65mm f/2.8 1-5x Macro Photo',
            125 => 'Canon TS-E 24mm f/3.5L',
            126 => 'Canon TS-E 45mm f/2.8',
            127 => 'Canon TS-E 90mm f/2.8 or Tamron Lens',
            '127.1' => 'Tamron 18-200mm f/3.5-6.3 Di II VC (B018)',
            129 => 'Canon EF 300mm f/2.8L USM',
            130 => 'Canon EF 50mm f/1.0L USM',
            131 => 'Canon EF 28-80mm f/2.8-4L USM or Sigma Lens',
            '131.1' => 'Sigma 8mm f/3.5 EX DG Circular Fisheye',
            '131.2' => 'Sigma 17-35mm f/2.8-4 EX DG Aspherical HSM',
            '131.3' => 'Sigma 17-70mm f/2.8-4.5 DC Macro',
            '131.4' => 'Sigma APO 50-150mm f/2.8 [II] EX DC HSM',
            '131.5' => 'Sigma APO 120-300mm f/2.8 EX DG HSM',
            '131.6' => 'Sigma 4.5mm f/2.8 EX DC HSM Circular Fisheye',
            '131.7' => 'Sigma 70-200mm f/2.8 APO EX HSM',
            '131.8' => 'Sigma 28-70mm f/2.8-4 DG',
            132 => 'Canon EF 1200mm f/5.6L USM',
            134 => 'Canon EF 600mm f/4L IS USM',
            135 => 'Canon EF 200mm f/1.8L USM',
            136 => 'Canon EF 300mm f/2.8L USM',
            '136.1' => 'Tamron SP 15-30mm f/2.8 Di VC USD (A012)',
            137 => 'Canon EF 85mm f/1.2L USM or Sigma or Tamron Lens',
            '137.1' => 'Sigma 18-50mm f/2.8-4.5 DC OS HSM',
            '137.2' => 'Sigma 50-200mm f/4-5.6 DC OS HSM',
            '137.3' => 'Sigma 18-250mm f/3.5-6.3 DC OS HSM',
            '137.4' => 'Sigma 24-70mm f/2.8 IF EX DG HSM',
            '137.5' => 'Sigma 18-125mm f/3.8-5.6 DC OS HSM',
            '137.6' => 'Sigma 17-70mm f/2.8-4 DC Macro OS HSM | C',
            '137.7' => 'Sigma 17-50mm f/2.8 OS HSM',
            '137.8' => 'Sigma 18-200mm f/3.5-6.3 DC OS HSM [II]',
            '137.9' => 'Tamron AF 18-270mm f/3.5-6.3 Di II VC PZD (B008)',
            '137.10' => 'Sigma 8-16mm f/4.5-5.6 DC HSM',
            '137.11' => 'Tamron SP 17-50mm f/2.8 XR Di II VC (B005)',
            '137.12' => 'Tamron SP 60mm f/2 Macro Di II (G005)',
            '137.13' => 'Sigma 10-20mm f/3.5 EX DC HSM',
            '137.14' => 'Tamron SP 24-70mm f/2.8 Di VC USD',
            '137.15' => 'Sigma 18-35mm f/1.8 DC HSM',
            '137.16' => 'Sigma 12-24mm f/4.5-5.6 DG HSM II',
            '137.17' => 'Sigma 70-300mm f/4-5.6 DG OS',
            138 => 'Canon EF 28-80mm f/2.8-4L',
            139 => 'Canon EF 400mm f/2.8L USM',
            140 => 'Canon EF 500mm f/4.5L USM',
            141 => 'Canon EF 500mm f/4.5L USM',
            142 => 'Canon EF 300mm f/2.8L IS USM',
            143 => 'Canon EF 500mm f/4L IS USM or Sigma Lens',
            '143.1' => 'Sigma 17-70mm f/2.8-4 DC Macro OS HSM',
            144 => 'Canon EF 35-135mm f/4-5.6 USM',
            145 => 'Canon EF 100-300mm f/4.5-5.6 USM',
            146 => 'Canon EF 70-210mm f/3.5-4.5 USM',
            147 => 'Canon EF 35-135mm f/4-5.6 USM',
            148 => 'Canon EF 28-80mm f/3.5-5.6 USM',
            149 => 'Canon EF 100mm f/2 USM',
            150 => 'Canon EF 14mm f/2.8L USM or Sigma Lens',
            '150.1' => 'Sigma 20mm EX f/1.8',
            '150.2' => 'Sigma 30mm f/1.4 DC HSM',
            '150.3' => 'Sigma 24mm f/1.8 DG Macro EX',
            '150.4' => 'Sigma 28mm f/1.8 DG Macro EX',
            '150.5' => 'Sigma 18-35mm f/1.8 DC HSM | A',
            151 => 'Canon EF 200mm f/2.8L USM',
            152 => 'Canon EF 300mm f/4L IS USM or Sigma Lens',
            '152.1' => 'Sigma 12-24mm f/4.5-5.6 EX DG ASPHERICAL HSM',
            '152.2' => 'Sigma 14mm f/2.8 EX Aspherical HSM',
            '152.3' => 'Sigma 10-20mm f/4-5.6',
            '152.4' => 'Sigma 100-300mm f/4',
            '152.5' => 'Sigma 300-800mm f/5.6 APO EX DG HSM',
            153 => 'Canon EF 35-350mm f/3.5-5.6L USM or Sigma or Tamron Lens',
            '153.1' => 'Sigma 50-500mm f/4-6.3 APO HSM EX',
            '153.2' => 'Tamron AF 28-300mm f/3.5-6.3 XR LD Aspherical [IF] Macro',
            '153.3' => 'Tamron AF 18-200mm f/3.5-6.3 XR Di II LD Aspherical [IF] Macro (A14)',
            '153.4' => 'Tamron 18-250mm f/3.5-6.3 Di II LD Aspherical [IF] Macro',
            154 => 'Canon EF 20mm f/2.8 USM or Zeiss Lens',
            '154.1' => 'Zeiss Milvus 21mm f/2.8',
            '154.2' => 'Zeiss Milvus 15mm f/2.8 ZE',
            '154.3' => 'Zeiss Milvus 18mm f/2.8 ZE',
            155 => 'Canon EF 85mm f/1.8 USM or Sigma Lens',
            '155.1' => 'Sigma 14mm f/1.8 DG HSM | A',
            156 => 'Canon EF 28-105mm f/3.5-4.5 USM or Tamron Lens',
            '156.1' => 'Tamron SP 70-300mm f/4-5.6 Di VC USD (A005)',
            '156.2' => 'Tamron SP AF 28-105mm f/2.8 LD Aspherical IF (176D)',
            160 => 'Canon EF 20-35mm f/3.5-4.5 USM or Tamron or Tokina Lens',
            '160.1' => 'Tamron AF 19-35mm f/3.5-4.5',
            '160.2' => 'Tokina AT-X 124 AF Pro DX 12-24mm f/4',
            '160.3' => 'Tokina AT-X 107 AF DX 10-17mm f/3.5-4.5 Fisheye',
            '160.4' => 'Tokina AT-X 116 AF Pro DX 11-16mm f/2.8',
            '160.5' => 'Tokina AT-X 11-20 F2.8 PRO DX Aspherical 11-20mm f/2.8',
            161 => 'Canon EF 28-70mm f/2.8L USM or Other Lens',
            '161.1' => 'Sigma 24-70mm f/2.8 EX',
            '161.2' => 'Sigma 28-70mm f/2.8 EX',
            '161.3' => 'Sigma 24-60mm f/2.8 EX DG',
            '161.4' => 'Tamron AF 17-50mm f/2.8 Di-II LD Aspherical',
            '161.5' => 'Tamron 90mm f/2.8',
            '161.6' => 'Tamron SP AF 17-35mm f/2.8-4 Di LD Aspherical IF (A05)',
            '161.7' => 'Tamron SP AF 28-75mm f/2.8 XR Di LD Aspherical [IF] Macro',
            '161.8' => 'Tokina AT-X 24-70mm f/2.8 PRO FX (IF)',
            162 => 'Canon EF 200mm f/2.8L USM',
            163 => 'Canon EF 300mm f/4L',
            164 => 'Canon EF 400mm f/5.6L',
            165 => 'Canon EF 70-200mm f/2.8L USM',
            166 => 'Canon EF 70-200mm f/2.8L USM + 1.4x',
            167 => 'Canon EF 70-200mm f/2.8L USM + 2x',
            168 => 'Canon EF 28mm f/1.8 USM or Sigma Lens',
            '168.1' => 'Sigma 50-100mm f/1.8 DC HSM | A',
            169 => 'Canon EF 17-35mm f/2.8L USM or Sigma Lens',
            '169.1' => 'Sigma 18-200mm f/3.5-6.3 DC OS',
            '169.2' => 'Sigma 15-30mm f/3.5-4.5 EX DG Aspherical',
            '169.3' => 'Sigma 18-50mm f/2.8 Macro',
            '169.4' => 'Sigma 50mm f/1.4 EX DG HSM',
            '169.5' => 'Sigma 85mm f/1.4 EX DG HSM',
            '169.6' => 'Sigma 30mm f/1.4 EX DC HSM',
            '169.7' => 'Sigma 35mm f/1.4 DG HSM',
            '169.8' => 'Sigma 35mm f/1.5 FF High-Speed Prime | 017',
            '169.9' => 'Sigma 70mm f/2.8 Macro EX DG',
            170 => 'Canon EF 200mm f/2.8L II USM or Sigma Lens',
            '170.1' => 'Sigma 300mm f/2.8 APO EX DG HSM',
            '170.2' => 'Sigma 800mm f/5.6 APO EX DG HSM',
            171 => 'Canon EF 300mm f/4L USM',
            172 => 'Canon EF 400mm f/5.6L USM or Sigma Lens',
            '172.1' => 'Sigma 150-600mm f/5-6.3 DG OS HSM | S',
            '172.2' => 'Sigma 500mm f/4.5 APO EX DG HSM',
            173 => 'Canon EF 180mm Macro f/3.5L USM or Sigma Lens',
            '173.1' => 'Sigma 180mm EX HSM Macro f/3.5',
            '173.2' => 'Sigma APO Macro 150mm f/2.8 EX DG HSM',
            '173.3' => 'Sigma 10mm f/2.8 EX DC Fisheye',
            '173.4' => 'Sigma 15mm f/2.8 EX DG Diagonal Fisheye',
            '173.5' => 'Venus Laowa 100mm F2.8 2X Ultra Macro APO',
            174 => 'Canon EF 135mm f/2L USM or Other Lens',
            '174.1' => 'Sigma 70-200mm f/2.8 EX DG APO OS HSM',
            '174.2' => 'Sigma 50-500mm f/4.5-6.3 APO DG OS HSM',
            '174.3' => 'Sigma 150-500mm f/5-6.3 APO DG OS HSM',
            '174.4' => 'Zeiss Milvus 100mm f/2 Makro',
            '174.5' => 'Sigma APO 50-150mm f/2.8 EX DC OS HSM',
            '174.6' => 'Sigma APO 120-300mm f/2.8 EX DG OS HSM',
            '174.7' => 'Sigma 120-300mm f/2.8 DG OS HSM S013',
            '174.8' => 'Sigma 120-400mm f/4.5-5.6 APO DG OS HSM',
            '174.9' => 'Sigma 200-500mm f/2.8 APO EX DG',
            175 => 'Canon EF 400mm f/2.8L USM',
            176 => 'Canon EF 24-85mm f/3.5-4.5 USM',
            177 => 'Canon EF 300mm f/4L IS USM',
            178 => 'Canon EF 28-135mm f/3.5-5.6 IS',
            179 => 'Canon EF 24mm f/1.4L USM',
            180 => 'Canon EF 35mm f/1.4L USM or Other Lens',
            '180.1' => 'Sigma 50mm f/1.4 DG HSM | A',
            '180.2' => 'Sigma 24mm f/1.4 DG HSM | A',
            '180.3' => 'Zeiss Milvus 50mm f/1.4',
            '180.4' => 'Zeiss Milvus 85mm f/1.4',
            '180.5' => 'Zeiss Otus 28mm f/1.4 ZE',
            '180.6' => 'Sigma 24mm f/1.5 FF High-Speed Prime | 017',
            '180.7' => 'Sigma 50mm f/1.5 FF High-Speed Prime | 017',
            '180.8' => 'Sigma 85mm f/1.5 FF High-Speed Prime | 017',
            '180.9' => 'Tokina Opera 50mm f/1.4 FF',
            '180.10' => 'Sigma 20mm f/1.4 DG HSM | A',
            181 => 'Canon EF 100-400mm f/4.5-5.6L IS USM + 1.4x or Sigma Lens',
            '181.1' => 'Sigma 150-600mm f/5-6.3 DG OS HSM | S + 1.4x',
            182 => 'Canon EF 100-400mm f/4.5-5.6L IS USM + 2x or Sigma Lens',
            '182.1' => 'Sigma 150-600mm f/5-6.3 DG OS HSM | S + 2x',
            183 => 'Canon EF 100-400mm f/4.5-5.6L IS USM or Sigma Lens',
            '183.1' => 'Sigma 150mm f/2.8 EX DG OS HSM APO Macro',
            '183.2' => 'Sigma 105mm f/2.8 EX DG OS HSM Macro',
            '183.3' => 'Sigma 180mm f/2.8 EX DG OS HSM APO Macro',
            '183.4' => 'Sigma 150-600mm f/5-6.3 DG OS HSM | C',
            '183.5' => 'Sigma 150-600mm f/5-6.3 DG OS HSM | S',
            '183.6' => 'Sigma 100-400mm f/5-6.3 DG OS HSM',
            '183.7' => 'Sigma 180mm f/3.5 APO Macro EX DG IF HSM',
            184 => 'Canon EF 400mm f/2.8L USM + 2x',
            185 => 'Canon EF 600mm f/4L IS USM',
            186 => 'Canon EF 70-200mm f/4L USM',
            187 => 'Canon EF 70-200mm f/4L USM + 1.4x',
            188 => 'Canon EF 70-200mm f/4L USM + 2x',
            189 => 'Canon EF 70-200mm f/4L USM + 2.8x',
            190 => 'Canon EF 100mm f/2.8 Macro USM',
            191 => 'Canon EF 400mm f/4 DO IS or Sigma Lens',
            '191.1' => 'Sigma 500mm f/4 DG OS HSM',
            193 => 'Canon EF 35-80mm f/4-5.6 USM',
            194 => 'Canon EF 80-200mm f/4.5-5.6 USM',
            195 => 'Canon EF 35-105mm f/4.5-5.6 USM',
            196 => 'Canon EF 75-300mm f/4-5.6 USM',
            197 => 'Canon EF 75-300mm f/4-5.6 IS USM or Sigma Lens',
            '197.1' => 'Sigma 18-300mm f/3.5-6.3 DC Macro OS HSM',
            198 => 'Canon EF 50mm f/1.4 USM or Other Lens',
            '198.1' => 'Zeiss Otus 55mm f/1.4 ZE',
            '198.2' => 'Zeiss Otus 85mm f/1.4 ZE',
            '198.3' => 'Zeiss Milvus 25mm f/1.4',
            '198.4' => 'Zeiss Otus 100mm f/1.4',
            '198.5' => 'Zeiss Milvus 35mm f/1.4 ZE',
            '198.6' => 'Yongnuo YN 35mm f/2',
            199 => 'Canon EF 28-80mm f/3.5-5.6 USM',
            200 => 'Canon EF 75-300mm f/4-5.6 USM',
            201 => 'Canon EF 28-80mm f/3.5-5.6 USM',
            202 => 'Canon EF 28-80mm f/3.5-5.6 USM IV',
            208 => 'Canon EF 22-55mm f/4-5.6 USM',
            209 => 'Canon EF 55-200mm f/4.5-5.6',
            210 => 'Canon EF 28-90mm f/4-5.6 USM',
            211 => 'Canon EF 28-200mm f/3.5-5.6 USM',
            212 => 'Canon EF 28-105mm f/4-5.6 USM',
            213 => 'Canon EF 90-300mm f/4.5-5.6 USM or Tamron Lens',
            '213.1' => 'Tamron SP 150-600mm f/5-6.3 Di VC USD (A011)',
            '213.2' => 'Tamron 16-300mm f/3.5-6.3 Di II VC PZD Macro (B016)',
            '213.3' => 'Tamron SP 35mm f/1.8 Di VC USD (F012)',
            '213.4' => 'Tamron SP 45mm f/1.8 Di VC USD (F013)',
            214 => 'Canon EF-S 18-55mm f/3.5-5.6 USM',
            215 => 'Canon EF 55-200mm f/4.5-5.6 II USM',
            217 => 'Tamron AF 18-270mm f/3.5-6.3 Di II VC PZD',
            220 => 'Yongnuo YN 50mm f/1.8',
            224 => 'Canon EF 70-200mm f/2.8L IS USM',
            225 => 'Canon EF 70-200mm f/2.8L IS USM + 1.4x',
            226 => 'Canon EF 70-200mm f/2.8L IS USM + 2x',
            227 => 'Canon EF 70-200mm f/2.8L IS USM + 2.8x',
            228 => 'Canon EF 28-105mm f/3.5-4.5 USM',
            229 => 'Canon EF 16-35mm f/2.8L USM',
            230 => 'Canon EF 24-70mm f/2.8L USM',
            231 => 'Canon EF 17-40mm f/4L USM or Sigma Lens',
            '231.1' => 'Sigma 12-24mm f/4 DG HSM A016',
            232 => 'Canon EF 70-300mm f/4.5-5.6 DO IS USM',
            233 => 'Canon EF 28-300mm f/3.5-5.6L IS USM',
            234 => 'Canon EF-S 17-85mm f/4-5.6 IS USM or Tokina Lens',
            '234.1' => 'Tokina AT-X 12-28 PRO DX 12-28mm f/4',
            235 => 'Canon EF-S 10-22mm f/3.5-4.5 USM',
            236 => 'Canon EF-S 60mm f/2.8 Macro USM',
            237 => 'Canon EF 24-105mm f/4L IS USM',
            238 => 'Canon EF 70-300mm f/4-5.6 IS USM',
            239 => 'Canon EF 85mm f/1.2L II USM or Rokinon Lens',
            '239.1' => 'Rokinon SP 85mm f/1.2',
            240 => 'Canon EF-S 17-55mm f/2.8 IS USM or Sigma Lens',
            '240.1' => 'Sigma 17-50mm f/2.8 EX DC OS HSM',
            241 => 'Canon EF 50mm f/1.2L USM',
            242 => 'Canon EF 70-200mm f/4L IS USM',
            243 => 'Canon EF 70-200mm f/4L IS USM + 1.4x',
            244 => 'Canon EF 70-200mm f/4L IS USM + 2x',
            245 => 'Canon EF 70-200mm f/4L IS USM + 2.8x',
            246 => 'Canon EF 16-35mm f/2.8L II USM',
            247 => 'Canon EF 14mm f/2.8L II USM',
            248 => 'Canon EF 200mm f/2L IS USM or Sigma Lens',
            '248.1' => 'Sigma 24-35mm f/2 DG HSM | A',
            '248.2' => 'Sigma 135mm f/2 FF High-Speed Prime | 017',
            '248.3' => 'Sigma 24-35mm f/2.2 FF Zoom | 017',
            '248.4' => 'Sigma 135mm f/1.8 DG HSM A017',
            249 => 'Canon EF 800mm f/5.6L IS USM',
            250 => 'Canon EF 24mm f/1.4L II USM or Sigma Lens',
            '250.1' => 'Sigma 20mm f/1.4 DG HSM | A',
            '250.2' => 'Sigma 20mm f/1.5 FF High-Speed Prime | 017',
            '250.3' => 'Tokina Opera 16-28mm f/2.8 FF',
            '250.4' => 'Sigma 85mm f/1.4 DG HSM A016',
            251 => 'Canon EF 70-200mm f/2.8L IS II USM',
            '251.1' => 'Canon EF 70-200mm f/2.8L IS III USM',
            252 => 'Canon EF 70-200mm f/2.8L IS II USM + 1.4x',
            '252.1' => 'Canon EF 70-200mm f/2.8L IS III USM + 1.4x',
            253 => 'Canon EF 70-200mm f/2.8L IS II USM + 2x',
            '253.1' => 'Canon EF 70-200mm f/2.8L IS III USM + 2x',
            254 => 'Canon EF 100mm f/2.8L Macro IS USM or Tamron Lens',
            '254.1' => 'Tamron SP 90mm f/2.8 Di VC USD 1:1 Macro (F017)',
            255 => 'Sigma 24-105mm f/4 DG OS HSM | A or Other Lens',
            '255.1' => 'Sigma 180mm f/2.8 EX DG OS HSM APO Macro',
            '255.2' => 'Tamron SP 70-200mm f/2.8 Di VC USD',
            '255.3' => 'Yongnuo YN 50mm f/1.8',
            368 => 'Sigma 14-24mm f/2.8 DG HSM | A or other Sigma Lens',
            '368.1' => 'Sigma 20mm f/1.4 DG HSM | A',
            '368.2' => 'Sigma 50mm f/1.4 DG HSM | A',
            '368.3' => 'Sigma 40mm f/1.4 DG HSM | A',
            '368.4' => 'Sigma 60-600mm f/4.5-6.3 DG OS HSM | S',
            '368.5' => 'Sigma 28mm f/1.4 DG HSM | A',
            '368.6' => 'Sigma 150-600mm f/5-6.3 DG OS HSM | S',
            '368.7' => 'Sigma 85mm f/1.4 DG HSM | A',
            '368.8' => 'Sigma 105mm f/1.4 DG HSM',
            '368.9' => 'Sigma 14-24mm f/2.8 DG HSM',
            '368.10' => 'Sigma 35mm f/1.4 DG HSM | A',
            '368.11' => 'Sigma 70mm f/2.8 DG Macro',
            '368.12' => 'Sigma 18-35mm f/1.8 DC HSM | A',
            '368.13' => 'Sigma 24-105mm f/4 DG OS HSM | A',
            '368.14' => 'Sigma 18-300mm f/3.5-6.3 DC Macro OS HSM | C',
            488 => 'Canon EF-S 15-85mm f/3.5-5.6 IS USM',
            489 => 'Canon EF 70-300mm f/4-5.6L IS USM',
            490 => 'Canon EF 8-15mm f/4L Fisheye USM',
            491 => 'Canon EF 300mm f/2.8L IS II USM or Tamron Lens',
            '491.1' => 'Tamron SP 70-200mm f/2.8 Di VC USD G2 (A025)',
            '491.2' => 'Tamron 18-400mm f/3.5-6.3 Di II VC HLD (B028)',
            '491.3' => 'Tamron 100-400mm f/4.5-6.3 Di VC USD (A035)',
            '491.4' => 'Tamron 70-210mm f/4 Di VC USD (A034)',
            '491.5' => 'Tamron 70-210mm f/4 Di VC USD (A034) + 1.4x',
            '491.6' => 'Tamron SP 24-70mm f/2.8 Di VC USD G2 (A032)',
            492 => 'Canon EF 400mm f/2.8L IS II USM',
            493 => 'Canon EF 500mm f/4L IS II USM or EF 24-105mm f4L IS USM',
            '493.1' => 'Canon EF 24-105mm f/4L IS USM',
            494 => 'Canon EF 600mm f/4L IS II USM',
            495 => 'Canon EF 24-70mm f/2.8L II USM or Sigma Lens',
            '495.1' => 'Sigma 24-70mm f/2.8 DG OS HSM | A',
            496 => 'Canon EF 200-400mm f/4L IS USM',
            499 => 'Canon EF 200-400mm f/4L IS USM + 1.4x',
            502 => 'Canon EF 28mm f/2.8 IS USM or Tamron Lens',
            '502.1' => 'Tamron 35mm f/1.8 Di VC USD (F012)',
            503 => 'Canon EF 24mm f/2.8 IS USM',
            504 => 'Canon EF 24-70mm f/4L IS USM',
            505 => 'Canon EF 35mm f/2 IS USM',
            506 => 'Canon EF 400mm f/4 DO IS II USM',
            507 => 'Canon EF 16-35mm f/4L IS USM',
            508 => 'Canon EF 11-24mm f/4L USM or Tamron Lens',
            '508.1' => 'Tamron 10-24mm f/3.5-4.5 Di II VC HLD (B023)',
            624 => 'Sigma 70-200mm f/2.8 DG OS HSM | S or other Sigma Lens',
            '624.1' => 'Sigma 150-600mm f/5-6.3 | C',
            747 => 'Canon EF 100-400mm f/4.5-5.6L IS II USM or Tamron Lens',
            '747.1' => 'Tamron SP 150-600mm f/5-6.3 Di VC USD G2',
            748 => 'Canon EF 100-400mm f/4.5-5.6L IS II USM + 1.4x or Tamron Lens',
            '748.1' => 'Tamron 100-400mm f/4.5-6.3 Di VC USD A035E + 1.4x',
            '748.2' => 'Tamron 70-210mm f/4 Di VC USD (A034) + 2x',
            749 => 'Tamron 100-400mm f/4.5-6.3 Di VC USD A035E + 2x',
            750 => 'Canon EF 35mm f/1.4L II USM or Tamron Lens',
            '750.1' => 'Tamron SP 85mm f/1.8 Di VC USD (F016)',
            '750.2' => 'Tamron SP 45mm f/1.8 Di VC USD (F013)',
            751 => 'Canon EF 16-35mm f/2.8L III USM',
            752 => 'Canon EF 24-105mm f/4L IS II USM',
            753 => 'Canon EF 85mm f/1.4L IS USM',
            754 => 'Canon EF 70-200mm f/4L IS II USM',
            757 => 'Canon EF 400mm f/2.8L IS III USM',
            758 => 'Canon EF 600mm f/4L IS III USM',
            1136 => 'Sigma 24-70mm f/2.8 DG OS HSM | A',
            4142 => 'Canon EF-S 18-135mm f/3.5-5.6 IS STM',
            4143 => 'Canon EF-M 18-55mm f/3.5-5.6 IS STM or Tamron Lens',
            '4143.1' => 'Tamron 18-200mm f/3.5-6.3 Di III VC',
            4144 => 'Canon EF 40mm f/2.8 STM',
            4145 => 'Canon EF-M 22mm f/2 STM',
            4146 => 'Canon EF-S 18-55mm f/3.5-5.6 IS STM',
            4147 => 'Canon EF-M 11-22mm f/4-5.6 IS STM',
            4148 => 'Canon EF-S 55-250mm f/4-5.6 IS STM',
            4149 => 'Canon EF-M 55-200mm f/4.5-6.3 IS STM',
            4150 => 'Canon EF-S 10-18mm f/4.5-5.6 IS STM',
            4152 => 'Canon EF 24-105mm f/3.5-5.6 IS STM',
            4153 => 'Canon EF-M 15-45mm f/3.5-6.3 IS STM',
            4154 => 'Canon EF-S 24mm f/2.8 STM',
            4155 => 'Canon EF-M 28mm f/3.5 Macro IS STM',
            4156 => 'Canon EF 50mm f/1.8 STM',
            4157 => 'Canon EF-M 18-150mm f/3.5-6.3 IS STM',
            4158 => 'Canon EF-S 18-55mm f/4-5.6 IS STM',
            4159 => 'Canon EF-M 32mm f/1.4 STM',
            4160 => 'Canon EF-S 35mm f/2.8 Macro IS STM',
            4208 => 'Sigma 56mm f/1.4 DC DN | C or other Sigma Lens',
            '4208.1' => 'Sigma 30mm F1.4 DC DN | C',
            36910 => 'Canon EF 70-300mm f/4-5.6 IS II USM',
            36912 => 'Canon EF-S 18-135mm f/3.5-5.6 IS USM',
            61182 => 'Canon RF 50mm F1.2L USM or other Canon RF Lens',
            '61182.1' => 'Canon RF 24-105mm F4L IS USM',
            '61182.2' => 'Canon RF 28-70mm F2L USM',
            '61182.3' => 'Canon RF 35mm F1.8 MACRO IS STM',
            '61182.4' => 'Canon RF 85mm F1.2L USM',
            '61182.5' => 'Canon RF 85mm F1.2L USM DS',
            '61182.6' => 'Canon RF 24-70mm F2.8L IS USM',
            '61182.7' => 'Canon RF 15-35mm F2.8L IS USM',
            '61182.8' => 'Canon RF 24-240mm F4-6.3 IS USM',
            '61182.9' => 'Canon RF 70-200mm F2.8L IS USM',
            '61182.10' => 'Canon RF 85mm F2 MACRO IS STM',
            '61182.11' => 'Canon RF 600mm F11 IS STM',
            '61182.12' => 'Canon RF 600mm F11 IS STM + RF1.4x',
            '61182.13' => 'Canon RF 600mm F11 IS STM + RF2x',
            '61182.14' => 'Canon RF 800mm F11 IS STM',
            '61182.15' => 'Canon RF 800mm F11 IS STM + RF1.4x',
            '61182.16' => 'Canon RF 800mm F11 IS STM + RF2x',
            '61182.17' => 'Canon RF 24-105mm F4-7.1 IS STM',
            '61182.18' => 'Canon RF 100-500mm F4.5-7.1L IS USM',
            '61182.19' => 'Canon RF 100-500mm F4.5-7.1L IS USM + RF1.4x',
            '61182.20' => 'Canon RF 100-500mm F4.5-7.1L IS USM + RF2x',
            '61182.21' => 'Canon RF 70-200mm F4L IS USM',
            '61182.22' => 'Canon RF 100mm F2.8L MACRO IS USM',
            '61182.23' => 'Canon RF 50mm F1.8 STM',
            '61182.24' => 'Canon RF 14-35mm F4L IS USM',
            '61182.25' => 'Canon RF-S 18-45mm F4.5-6.3 IS STM',
            '61182.26' => 'Canon RF 100-400mm F5.6-8 IS USM',
            '61182.27' => 'Canon RF 100-400mm F5.6-8 IS USM + RF1.4x',
            '61182.28' => 'Canon RF 100-400mm F5.6-8 IS USM + RF2x',
            '61182.29' => 'Canon RF-S 18-150mm F3.5-6.3 IS STM',
            '61182.30' => 'Canon RF 24mm F1.8 MACRO IS STM',
            '61182.31' => 'Canon RF 16mm F2.8 STM',
            '61182.32' => 'Canon RF 400mm F2.8L IS USM',
            '61182.33' => 'Canon RF 400mm F2.8L IS USM + RF1.4x',
            '61182.34' => 'Canon RF 400mm F2.8L IS USM + RF2x',
            '61182.35' => 'Canon RF 600mm F4L IS USM',
            '61182.36' => 'Canon RF 600mm F4L IS USM + RF1.4x',
            '61182.37' => 'Canon RF 600mm F4L IS USM + RF2x',
            '61182.38' => 'Canon RF 800mm F5.6L IS USM',
            '61182.39' => 'Canon RF 800mm F5.6L IS USM + RF1.4x',
            '61182.40' => 'Canon RF 800mm F5.6L IS USM + RF2x',
            '61182.41' => 'Canon RF 1200mm F8L IS USM',
            '61182.42' => 'Canon RF 1200mm F8L IS USM + RF1.4x',
            '61182.43' => 'Canon RF 1200mm F8L IS USM + RF2x',
            '61182.44' => 'Canon RF 5.2mm F2.8L Dual Fisheye 3D VR',
            '61182.45' => 'Canon RF 15-30mm F4.5-6.3 IS STM',
            '61182.46' => 'Canon RF 135mm F1.8 L IS USM',
            '61182.47' => 'Canon RF 24-50mm F4.5-6.3 IS STM',
            '61182.48' => 'Canon RF-S 55-210mm F5-7.1 IS STM',
            '61182.49' => 'Canon RF 100-300mm F2.8L IS USM',
            '61182.50' => 'Canon RF 100-300mm F2.8L IS USM + RF1.4x',
            '61182.51' => 'Canon RF 100-300mm F2.8L IS USM + RF2x',
            '61182.52' => 'Canon RF 10-20mm F4 L IS STM',
            '61182.53' => 'Canon RF 28mm F2.8 STM',
            '61182.54' => 'Canon RF 24-105mm F2.8 L IS USM Z',
            '61182.55' => 'Canon RF-S 10-18mm F4.5-6.3 IS STM',
            '61182.56' => 'Canon RF 35mm F1.4 L VCM',
            '61182.57' => 'Canon RF 70-200mm F2.8 L IS USM Z',
            '61182.58' => 'Canon RF 50mm F1.4 L VCM',
            '61182.59' => 'Canon RF 24mm F1.4 L VCM',
            61491 => 'Canon CN-E 14mm T3.1 L F',
            61492 => 'Canon CN-E 24mm T1.5 L F',
            61494 => 'Canon CN-E 85mm T1.3 L F',
            61495 => 'Canon CN-E 135mm T2.2 L F',
            61496 => 'Canon CN-E 35mm T1.5 L F',
            65535 => 'n/a',
          ),
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'LensType',
        'title' => 'Lens Type',
        'format' =>
        array (
          0 => 3,
        ),
        'exiftoolDOMNode' => 'Canon:LensType',
      ),
    ),
    23 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\FocalLength',
        'text' =>
        array (
          'default' => '{value} mm',
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MaxFocalLength',
        'title' => 'Max Focal Length',
        'format' =>
        array (
          0 => 3,
        ),
        'exiftoolDOMNode' => 'Canon:MaxFocalLength',
      ),
    ),
    24 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\FocalLength',
        'text' =>
        array (
          'default' => '{value} mm',
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MinFocalLength',
        'title' => 'Min Focal Length',
        'format' =>
        array (
          0 => 3,
        ),
        'exiftoolDOMNode' => 'Canon:MinFocalLength',
      ),
    ),
    25 =>
    array (
      0 =>
      array (
        'text' =>
        array (
          'default' => '{value}/mm',
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocalUnits',
        'title' => 'Focal Units',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:FocalUnits',
      ),
    ),
    26 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\ApertureValue',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MaxAperture',
        'title' => 'Max Aperture',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:MaxAperture',
      ),
    ),
    27 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\ApertureValue',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MinAperture',
        'title' => 'Min Aperture',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:MinAperture',
      ),
    ),
    28 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FlashActivity',
        'title' => 'Flash Activity',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:FlashActivity',
      ),
    ),
    29 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\CameraSettings\\FlashBits',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FlashBits',
        'title' => 'Flash Bits',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => '(none)',
            'Bit0' => 'Manual',
            'Bit1' => 'TTL',
            'Bit11' => 'FP sync used',
            'Bit13' => 'Built-in',
            'Bit14' => 'External',
            'Bit2' => 'A-TTL',
            'Bit3' => 'E-TTL',
            'Bit4' => 'FP sync enabled',
            'Bit7' => '2nd-curtain sync used',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:FlashBits',
      ),
    ),
    32 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocusContinuous',
        'title' => 'Focus Continuous',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Single',
            1 => 'Continuous',
            8 => 'Manual',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:FocusContinuous',
      ),
    ),
    33 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'AESetting',
        'title' => 'AE Setting',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Normal AE',
            1 => 'Exposure Compensation',
            2 => 'AE Lock',
            3 => 'AE Lock + Exposure Comp.',
            4 => 'No AE',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:AESetting',
      ),
    ),
    34 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageStabilization',
        'title' => 'Image Stabilization',
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
            2 => 'Shoot Only',
            3 => 'Panning',
            4 => 'Dynamic',
            256 => 'Off (2)',
            257 => 'On (2)',
            258 => 'Shoot Only (2)',
            259 => 'Panning (2)',
            260 => 'Dynamic (2)',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:ImageStabilization',
      ),
    ),
    35 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Vendor\\Canon\\Exif\\DisplayAperture',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'DisplayAperture',
        'title' => 'Display Aperture',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:DisplayAperture',
      ),
    ),
    36 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ZoomSourceWidth',
        'title' => 'Zoom Source Width',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:ZoomSourceWidth',
      ),
    ),
    37 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ZoomTargetWidth',
        'title' => 'Zoom Target Width',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'Canon:ZoomTargetWidth',
      ),
    ),
    39 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SpotMeteringMode',
        'title' => 'Spot Metering Mode',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Center',
            1 => 'AF Point',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:SpotMeteringMode',
      ),
    ),
    40 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PhotoEffect',
        'title' => 'Photo Effect',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Off',
            1 => 'Vivid',
            2 => 'Neutral',
            3 => 'Smooth',
            4 => 'Sepia',
            5 => 'B&W',
            6 => 'Custom',
            100 => 'My Color Data',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:PhotoEffect',
      ),
    ),
    41 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ManualFlashOutput',
        'title' => 'Manual Flash Output',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'n/a',
            1280 => 'Full',
            1282 => 'Medium',
            1284 => 'Low',
            32767 => 'n/a',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:ManualFlashOutput',
      ),
    ),
    42 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ColorTone',
        'title' => 'Color Tone',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Normal',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:ColorTone',
      ),
    ),
    46 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SRAWQuality',
        'title' => 'SRAW Quality',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'n/a',
            1 => 'sRAW1 (mRAW)',
            2 => 'sRAW2 (sRAW)',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:SRAWQuality',
      ),
    ),
    51 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Clarity',
        'title' => 'Clarity',
        'format' =>
        array (
          0 => 8,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            32767 => 'n/a',
          ),
        ),
        'exiftoolDOMNode' => 'Canon:Clarity',
      ),
    ),
  ),
);
}
