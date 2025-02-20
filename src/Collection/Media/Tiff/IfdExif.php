<?php
/**
 * This file is generated automatically by executing the 'fileeye-mediaprobe compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable

namespace FileEye\MediaProbe\Collection\Media\Tiff;

use FileEye\MediaProbe\Collection\CollectionBase;

class IfdExif extends CollectionBase {

  protected static $map = array (
  'name' => 'ExifIFD',
  'title' => 'Exif IFD',
  'handler' => 'FileEye\\MediaProbe\\Block\\Media\\Tiff\\Ifd',
  'DOMNode' => 'ifd',
  'defaultItemCollection' => 'Media\\Tiff\\Tag',
  'id' => 'Media\\Tiff\\IfdExif',
  'itemsByName' =>
  array (
    'Acceleration' =>
    array (
      0 => 37892,
    ),
    'AdventRevision' =>
    array (
      0 => 33590,
    ),
    'AdventScale' =>
    array (
      0 => 33589,
    ),
    'AffineTransformMat' =>
    array (
      0 => 32956,
    ),
    'AliasLayerMetadata' =>
    array (
      0 => 50784,
    ),
    'AlphaByteCount' =>
    array (
      0 => 48323,
    ),
    'AlphaDataDiscard' =>
    array (
      0 => 48325,
    ),
    'AlphaOffset' =>
    array (
      0 => 48322,
    ),
    'AmbientTemperature' =>
    array (
      0 => 37888,
    ),
    'Annotations' =>
    array (
      0 => 50255,
    ),
    'ApertureValue' =>
    array (
      0 => 37378,
    ),
    'BackgroundColorIndicator' =>
    array (
      0 => 34024,
    ),
    'BackgroundColorValue' =>
    array (
      0 => 34026,
    ),
    'BadFaxLines' =>
    array (
      0 => 326,
    ),
    'BatteryLevel' =>
    array (
      0 => 33423,
    ),
    'BitsPerExtendedRunLength' =>
    array (
      0 => 34021,
    ),
    'BitsPerRunLength' =>
    array (
      0 => 34020,
    ),
    'Brightness' =>
    array (
      0 => 65107,
    ),
    'BrightnessValue' =>
    array (
      0 => 37379,
    ),
    'CFAPattern' =>
    array (
      0 => 41730,
    ),
    'CIP3DataFile' =>
    array (
      0 => 37434,
    ),
    'CIP3Sheet' =>
    array (
      0 => 37435,
    ),
    'CIP3Side' =>
    array (
      0 => 37436,
    ),
    'CMYKEquivalent' =>
    array (
      0 => 34032,
    ),
    'CR2CFAPattern' =>
    array (
      0 => 50656,
    ),
    'CameraElevationAngle' =>
    array (
      0 => 37893,
    ),
    'CameraFirmware' =>
    array (
      0 => 42041,
    ),
    'ChrominanceTable' =>
    array (
      0 => 20625,
    ),
    'CleanFaxData' =>
    array (
      0 => 327,
    ),
    'ClipPath' =>
    array (
      0 => 343,
    ),
    'CodingMethods' =>
    array (
      0 => 403,
    ),
    'ColorCharacterization' =>
    array (
      0 => 34029,
    ),
    'ColorMap' =>
    array (
      0 => 320,
    ),
    'ColorResponseUnit' =>
    array (
      0 => 300,
    ),
    'ColorSequence' =>
    array (
      0 => 34017,
    ),
    'ColorSpace' =>
    array (
      0 => 40961,
    ),
    'ColorTable' =>
    array (
      0 => 34022,
    ),
    'ColorTransferFunction' =>
    array (
      0 => 20506,
    ),
    'ComponentsConfiguration' =>
    array (
      0 => 37121,
    ),
    'CompositeImage' =>
    array (
      0 => 42080,
    ),
    'CompositeImageCount' =>
    array (
      0 => 42081,
    ),
    'CompositeImageExposureTimes' =>
    array (
      0 => 42082,
    ),
    'CompressedBitsPerPixel' =>
    array (
      0 => 37122,
    ),
    'ConsecutiveBadFaxLines' =>
    array (
      0 => 328,
    ),
    'Contrast' =>
    array (
      0 => 41992,
      1 => 65108,
    ),
    'Converter' =>
    array (
      0 => 65101,
    ),
    'CreateDate' =>
    array (
      0 => 36868,
    ),
    'CustomRendered' =>
    array (
      0 => 41985,
    ),
    'DataType' =>
    array (
      0 => 32996,
    ),
    'DateTimeOriginal' =>
    array (
      0 => 36867,
    ),
    'Decode' =>
    array (
      0 => 433,
    ),
    'DefaultImageColor' =>
    array (
      0 => 434,
    ),
    'DeviceSettingDescription' =>
    array (
      0 => 41995,
    ),
    'DigitalZoomRatio' =>
    array (
      0 => 41988,
    ),
    'DotRange' =>
    array (
      0 => 336,
    ),
    'ExifImageHeight' =>
    array (
      0 => 40963,
    ),
    'ExifImageWidth' =>
    array (
      0 => 40962,
    ),
    'ExifVersion' =>
    array (
      0 => 36864,
    ),
    'ExpandFilm' =>
    array (
      0 => 44994,
    ),
    'ExpandFilterLens' =>
    array (
      0 => 44995,
    ),
    'ExpandFlashLamp' =>
    array (
      0 => 44997,
    ),
    'ExpandLens' =>
    array (
      0 => 44993,
    ),
    'ExpandScanner' =>
    array (
      0 => 44996,
    ),
    'ExpandSoftware' =>
    array (
      0 => 44992,
    ),
    'Exposure' =>
    array (
      0 => 65105,
    ),
    'ExposureCompensation' =>
    array (
      0 => 37380,
    ),
    'ExposureIndex' =>
    array (
      0 => 37397,
      1 => 41493,
    ),
    'ExposureMode' =>
    array (
      0 => 41986,
    ),
    'ExposureProgram' =>
    array (
      0 => 34850,
    ),
    'ExposureTime' =>
    array (
      0 => 33434,
    ),
    'ExtraSamples' =>
    array (
      0 => 338,
    ),
    'FNumber' =>
    array (
      0 => 33437,
    ),
    'FaxProfile' =>
    array (
      0 => 402,
    ),
    'FaxRecvParams' =>
    array (
      0 => 34908,
    ),
    'FaxRecvTime' =>
    array (
      0 => 34910,
    ),
    'FaxSubAddress' =>
    array (
      0 => 34909,
    ),
    'FedexEDR' =>
    array (
      0 => 34929,
    ),
    'FileSource' =>
    array (
      0 => 41728,
    ),
    'Flash' =>
    array (
      0 => 37385,
    ),
    'FlashEnergy' =>
    array (
      0 => 37387,
      1 => 41483,
    ),
    'FlashpixVersion' =>
    array (
      0 => 40960,
    ),
    'FocalLength' =>
    array (
      0 => 37386,
    ),
    'FocalLengthIn35mmFormat' =>
    array (
      0 => 41989,
    ),
    'FocalPlaneResolutionUnit' =>
    array (
      0 => 37392,
      1 => 41488,
    ),
    'FocalPlaneXResolution' =>
    array (
      0 => 37390,
      1 => 41486,
    ),
    'FocalPlaneYResolution' =>
    array (
      0 => 37391,
      1 => 41487,
    ),
    'FovCot' =>
    array (
      0 => 33304,
    ),
    'FrameDelay' =>
    array (
      0 => 20736,
    ),
    'FreeByteCounts' =>
    array (
      0 => 289,
    ),
    'FreeOffsets' =>
    array (
      0 => 288,
    ),
    'GDALMetadata' =>
    array (
      0 => 42112,
    ),
    'GDALNoData' =>
    array (
      0 => 42113,
    ),
    'GainControl' =>
    array (
      0 => 41991,
    ),
    'Gamma' =>
    array (
      0 => 42240,
    ),
    'GlobalPalette' =>
    array (
      0 => 20738,
    ),
    'GooglePlusUploadCode' =>
    array (
      0 => 36873,
    ),
    'GrayResponseCurve' =>
    array (
      0 => 291,
    ),
    'GridSize' =>
    array (
      0 => 20497,
    ),
    'HCUsage' =>
    array (
      0 => 34030,
    ),
    'HalftoneDegree' =>
    array (
      0 => 20492,
    ),
    'HalftoneLPI' =>
    array (
      0 => 20490,
    ),
    'HalftoneLPIUnit' =>
    array (
      0 => 20491,
    ),
    'HalftoneMisc' =>
    array (
      0 => 20494,
    ),
    'HalftoneScreen' =>
    array (
      0 => 20495,
    ),
    'HalftoneShape' =>
    array (
      0 => 20493,
    ),
    'HasselbladRawImage' =>
    array (
      0 => 46275,
    ),
    'HeightResolution' =>
    array (
      0 => 48259,
    ),
    'Humidity' =>
    array (
      0 => 37889,
    ),
    'INGRReserved' =>
    array (
      0 => 33921,
    ),
    'ISO' =>
    array (
      0 => 34855,
    ),
    'ISOSpeed' =>
    array (
      0 => 34867,
    ),
    'ISOSpeedLatitudeyyy' =>
    array (
      0 => 34868,
    ),
    'ISOSpeedLatitudezzz' =>
    array (
      0 => 34869,
    ),
    'IT8Header' =>
    array (
      0 => 34018,
    ),
    'ImageByteCount' =>
    array (
      0 => 48321,
    ),
    'ImageColorIndicator' =>
    array (
      0 => 34023,
    ),
    'ImageColorValue' =>
    array (
      0 => 34025,
    ),
    'ImageDataDiscard' =>
    array (
      0 => 48324,
    ),
    'ImageDepth' =>
    array (
      0 => 32997,
    ),
    'ImageEditingSoftware' =>
    array (
      0 => 42043,
    ),
    'ImageEditor' =>
    array (
      0 => 42040,
    ),
    'ImageFullHeight' =>
    array (
      0 => 33301,
    ),
    'ImageFullWidth' =>
    array (
      0 => 33300,
    ),
    'ImageHeight' =>
    array (
      0 => 48257,
    ),
    'ImageHistory' =>
    array (
      0 => 37395,
      1 => 41491,
    ),
    'ImageID' =>
    array (
      0 => 32781,
    ),
    'ImageLayer' =>
    array (
      0 => 34732,
    ),
    'ImageNumber' =>
    array (
      0 => 37393,
      1 => 41489,
    ),
    'ImageOffset' =>
    array (
      0 => 48320,
    ),
    'ImageReferencePoints' =>
    array (
      0 => 32953,
    ),
    'ImageTitle' =>
    array (
      0 => 42038,
    ),
    'ImageType' =>
    array (
      0 => 48132,
    ),
    'ImageUniqueID' =>
    array (
      0 => 42016,
    ),
    'ImageWidth' =>
    array (
      0 => 48256,
    ),
    'IndexBackground' =>
    array (
      0 => 20739,
    ),
    'IndexTransparent' =>
    array (
      0 => 20740,
    ),
    'Indexed' =>
    array (
      0 => 346,
    ),
    'InkNames' =>
    array (
      0 => 333,
    ),
    'IntergraphFlagRegisters' =>
    array (
      0 => 33919,
    ),
    'IntergraphMatrix' =>
    array (
      0 => 33920,
    ),
    'IntergraphPacketData' =>
    array (
      0 => 33918,
    ),
    'Interlace' =>
    array (
      0 => 34857,
    ),
    'JBIGOptions' =>
    array (
      0 => 34750,
    ),
    'JPEGACTables' =>
    array (
      0 => 521,
    ),
    'JPEGDCTables' =>
    array (
      0 => 520,
    ),
    'JPEGLosslessPredictors' =>
    array (
      0 => 517,
    ),
    'JPEGPointTransforms' =>
    array (
      0 => 518,
    ),
    'JPEGProc' =>
    array (
      0 => 512,
    ),
    'JPEGQTables' =>
    array (
      0 => 519,
    ),
    'JPEGQuality' =>
    array (
      0 => 20496,
    ),
    'JPEGRestartInterval' =>
    array (
      0 => 515,
    ),
    'JPEGTables' =>
    array (
      0 => 347,
      1 => 437,
    ),
    'JPLCartoIFD' =>
    array (
      0 => 34263,
    ),
    'Lens' =>
    array (
      0 => 65002,
    ),
    'LensInfo' =>
    array (
      0 => 42034,
    ),
    'LensMake' =>
    array (
      0 => 42035,
    ),
    'LensModel' =>
    array (
      0 => 42036,
    ),
    'LensSerialNumber' =>
    array (
      0 => 42037,
    ),
    'LightSource' =>
    array (
      0 => 37384,
    ),
    'LoopCount' =>
    array (
      0 => 20737,
    ),
    'LuminanceTable' =>
    array (
      0 => 20624,
    ),
    'MDColorTable' =>
    array (
      0 => 33447,
    ),
    'MDFileTag' =>
    array (
      0 => 33445,
    ),
    'MDFileUnits' =>
    array (
      0 => 33452,
    ),
    'MDLabName' =>
    array (
      0 => 33448,
    ),
    'MDPrepDate' =>
    array (
      0 => 33450,
    ),
    'MDPrepTime' =>
    array (
      0 => 33451,
    ),
    'MDSampleInfo' =>
    array (
      0 => 33449,
    ),
    'MDScalePixel' =>
    array (
      0 => 33446,
    ),
    'MSDocumentText' =>
    array (
      0 => 37679,
    ),
    'MSDocumentTextPosition' =>
    array (
      0 => 37681,
    ),
    'MSPropertySetStorage' =>
    array (
      0 => 37680,
    ),
    'MakerNote' =>
    array (
      0 => 37500,
    ),
    'MatrixWorldToCamera' =>
    array (
      0 => 33306,
    ),
    'MatrixWorldToScreen' =>
    array (
      0 => 33305,
    ),
    'Matteing' =>
    array (
      0 => 32995,
    ),
    'MaxApertureValue' =>
    array (
      0 => 37381,
    ),
    'MetadataEditingSoftware' =>
    array (
      0 => 42044,
    ),
    'MeteringMode' =>
    array (
      0 => 37383,
    ),
    'ModeNumber' =>
    array (
      0 => 405,
    ),
    'Model2' =>
    array (
      0 => 33405,
    ),
    'ModelTiePoint' =>
    array (
      0 => 33922,
    ),
    'ModelTransform' =>
    array (
      0 => 34264,
    ),
    'MoireFilter' =>
    array (
      0 => 65112,
    ),
    'MultiProfiles' =>
    array (
      0 => 34688,
    ),
    'Noise' =>
    array (
      0 => 37389,
      1 => 41485,
    ),
    'NumberofInks' =>
    array (
      0 => 334,
    ),
    'OPIProxy' =>
    array (
      0 => 351,
    ),
    'OceApplicationSelector' =>
    array (
      0 => 50216,
    ),
    'OceIDNumber' =>
    array (
      0 => 50217,
    ),
    'OceImageLogic' =>
    array (
      0 => 50218,
    ),
    'OceScanjobDesc' =>
    array (
      0 => 50215,
    ),
    'OffsetSchema' =>
    array (
      0 => 59933,
    ),
    'OffsetTime' =>
    array (
      0 => 36880,
    ),
    'OffsetTimeDigitized' =>
    array (
      0 => 36882,
    ),
    'OffsetTimeOriginal' =>
    array (
      0 => 36881,
    ),
    'Opto-ElectricConvFactor' =>
    array (
      0 => 34856,
    ),
    'OriginalFileName' =>
    array (
      0 => 50547,
    ),
    'OtherImageLength' =>
    array (
      0 => 279,
      1 => 514,
    ),
    'OtherImageStart' =>
    array (
      0 => 273,
      1 => 513,
    ),
    'OwnerName' =>
    array (
      0 => 42032,
      1 => 65000,
    ),
    'Padding' =>
    array (
      0 => 59932,
    ),
    'PaletteHistogram' =>
    array (
      0 => 20755,
    ),
    'Photographer' =>
    array (
      0 => 42039,
    ),
    'PixelFormat' =>
    array (
      0 => 48129,
    ),
    'PixelIntensityRange' =>
    array (
      0 => 34027,
    ),
    'PixelMagicJBIGOptions' =>
    array (
      0 => 34232,
    ),
    'PixelScale' =>
    array (
      0 => 33550,
    ),
    'PixelUnits' =>
    array (
      0 => 20752,
    ),
    'PixelsPerUnitX' =>
    array (
      0 => 20753,
    ),
    'PixelsPerUnitY' =>
    array (
      0 => 20754,
    ),
    'Pressure' =>
    array (
      0 => 37890,
    ),
    'PreviewJXLLength' =>
    array (
      0 => 279,
    ),
    'PreviewJXLStart' =>
    array (
      0 => 273,
    ),
    'PrintFlags' =>
    array (
      0 => 20485,
    ),
    'PrintFlagsBleedWidth' =>
    array (
      0 => 20488,
    ),
    'PrintFlagsBleedWidthScale' =>
    array (
      0 => 20489,
    ),
    'PrintFlagsCrop' =>
    array (
      0 => 20487,
    ),
    'PrintFlagsVersion' =>
    array (
      0 => 20486,
    ),
    'ProfileType' =>
    array (
      0 => 401,
    ),
    'RAWDevelopingSoftware' =>
    array (
      0 => 42042,
    ),
    'RasterPadding' =>
    array (
      0 => 34019,
    ),
    'RawFile' =>
    array (
      0 => 65100,
    ),
    'RawImageSegmentation' =>
    array (
      0 => 50752,
    ),
    'RecommendedExposureIndex' =>
    array (
      0 => 34866,
    ),
    'RegionXformTackPoint' =>
    array (
      0 => 32954,
    ),
    'RelatedSoundFile' =>
    array (
      0 => 40964,
    ),
    'RenderingIntent' =>
    array (
      0 => 771,
    ),
    'ResolutionXLengthUnit' =>
    array (
      0 => 20483,
    ),
    'ResolutionXUnit' =>
    array (
      0 => 20481,
    ),
    'ResolutionYLengthUnit' =>
    array (
      0 => 20484,
    ),
    'ResolutionYUnit' =>
    array (
      0 => 20482,
    ),
    'RowInterleaveFactor' =>
    array (
      0 => 50975,
    ),
    'SMaxSampleValue' =>
    array (
      0 => 341,
    ),
    'SMinSampleValue' =>
    array (
      0 => 340,
    ),
    'SamsungRawByteOrder' =>
    array (
      0 => 41217,
    ),
    'SamsungRawPointersLength' =>
    array (
      0 => 40977,
    ),
    'SamsungRawPointersOffset' =>
    array (
      0 => 40976,
    ),
    'SamsungRawUnknown' =>
    array (
      0 => 41218,
    ),
    'Saturation' =>
    array (
      0 => 41993,
      1 => 65109,
    ),
    'SceneCaptureType' =>
    array (
      0 => 41990,
    ),
    'SceneType' =>
    array (
      0 => 41729,
    ),
    'SecurityClassification' =>
    array (
      0 => 37394,
      1 => 41490,
    ),
    'SelfTimerMode' =>
    array (
      0 => 34859,
    ),
    'SensingMethod' =>
    array (
      0 => 37399,
      1 => 41495,
    ),
    'SensitivityType' =>
    array (
      0 => 34864,
    ),
    'SerialNumber' =>
    array (
      0 => 42033,
      1 => 65001,
    ),
    'Shadows' =>
    array (
      0 => 65106,
    ),
    'SharedData' =>
    array (
      0 => 34689,
    ),
    'Sharpness' =>
    array (
      0 => 41994,
      1 => 65110,
    ),
    'ShutterSpeedValue' =>
    array (
      0 => 37377,
    ),
    'Site' =>
    array (
      0 => 34016,
    ),
    'Smoothness' =>
    array (
      0 => 65111,
    ),
    'SonyRawFileType' =>
    array (
      0 => 28672,
    ),
    'SonyToneCurve' =>
    array (
      0 => 28688,
    ),
    'SpatialFrequencyResponse' =>
    array (
      0 => 37388,
      1 => 41484,
    ),
    'SpectralSensitivity' =>
    array (
      0 => 34852,
    ),
    'StandardOutputSensitivity' =>
    array (
      0 => 34865,
    ),
    'StoNits' =>
    array (
      0 => 37439,
    ),
    'StripByteCounts' =>
    array (
      0 => 279,
    ),
    'StripOffsets' =>
    array (
      0 => 273,
    ),
    'StripRowCounts' =>
    array (
      0 => 559,
    ),
    'SubSecTime' =>
    array (
      0 => 37520,
    ),
    'SubSecTimeDigitized' =>
    array (
      0 => 37522,
    ),
    'SubSecTimeOriginal' =>
    array (
      0 => 37521,
    ),
    'SubTileBlockSize' =>
    array (
      0 => 50974,
    ),
    'SubjectArea' =>
    array (
      0 => 37396,
    ),
    'SubjectDistance' =>
    array (
      0 => 37382,
    ),
    'SubjectDistanceRange' =>
    array (
      0 => 41996,
    ),
    'SubjectLocation' =>
    array (
      0 => 41492,
    ),
    'T4Options' =>
    array (
      0 => 292,
    ),
    'T6Options' =>
    array (
      0 => 293,
    ),
    'T82Options' =>
    array (
      0 => 435,
    ),
    'T88Options' =>
    array (
      0 => 34690,
    ),
    'TIFF-EPStandardID' =>
    array (
      0 => 37398,
      1 => 41494,
    ),
    'TIFF_FXExtensions' =>
    array (
      0 => 34687,
    ),
    'TextureFormat' =>
    array (
      0 => 33302,
    ),
    'ThumbnailArtist' =>
    array (
      0 => 20532,
    ),
    'ThumbnailBitsPerSample' =>
    array (
      0 => 20514,
    ),
    'ThumbnailColorDepth' =>
    array (
      0 => 20501,
    ),
    'ThumbnailCompressedSize' =>
    array (
      0 => 20505,
    ),
    'ThumbnailCompression' =>
    array (
      0 => 20515,
    ),
    'ThumbnailCopyright' =>
    array (
      0 => 20539,
    ),
    'ThumbnailData' =>
    array (
      0 => 20507,
    ),
    'ThumbnailDateTime' =>
    array (
      0 => 20531,
    ),
    'ThumbnailDescription' =>
    array (
      0 => 20517,
    ),
    'ThumbnailEquipMake' =>
    array (
      0 => 20518,
    ),
    'ThumbnailEquipModel' =>
    array (
      0 => 20519,
    ),
    'ThumbnailFormat' =>
    array (
      0 => 20498,
    ),
    'ThumbnailHeight' =>
    array (
      0 => 20500,
    ),
    'ThumbnailImageHeight' =>
    array (
      0 => 20513,
    ),
    'ThumbnailImageWidth' =>
    array (
      0 => 20512,
    ),
    'ThumbnailLength' =>
    array (
      0 => 20504,
    ),
    'ThumbnailOrientation' =>
    array (
      0 => 20521,
    ),
    'ThumbnailPhotometricInterp' =>
    array (
      0 => 20516,
    ),
    'ThumbnailPlanarConfig' =>
    array (
      0 => 20527,
    ),
    'ThumbnailPlanes' =>
    array (
      0 => 20502,
    ),
    'ThumbnailPrimaryChromaticities' =>
    array (
      0 => 20534,
    ),
    'ThumbnailRawBytes' =>
    array (
      0 => 20503,
    ),
    'ThumbnailRefBlackWhite' =>
    array (
      0 => 20538,
    ),
    'ThumbnailResolutionUnit' =>
    array (
      0 => 20528,
    ),
    'ThumbnailResolutionX' =>
    array (
      0 => 20525,
    ),
    'ThumbnailResolutionY' =>
    array (
      0 => 20526,
    ),
    'ThumbnailRowsPerStrip' =>
    array (
      0 => 20523,
    ),
    'ThumbnailSamplesPerPixel' =>
    array (
      0 => 20522,
    ),
    'ThumbnailSoftware' =>
    array (
      0 => 20530,
    ),
    'ThumbnailStripByteCounts' =>
    array (
      0 => 20524,
    ),
    'ThumbnailStripOffsets' =>
    array (
      0 => 20520,
    ),
    'ThumbnailTransferFunction' =>
    array (
      0 => 20529,
    ),
    'ThumbnailWhitePoint' =>
    array (
      0 => 20533,
    ),
    'ThumbnailWidth' =>
    array (
      0 => 20499,
    ),
    'ThumbnailYCbCrCoefficients' =>
    array (
      0 => 20535,
    ),
    'ThumbnailYCbCrPositioning' =>
    array (
      0 => 20537,
    ),
    'ThumbnailYCbCrSubsampling' =>
    array (
      0 => 20536,
    ),
    'TileByteCounts' =>
    array (
      0 => 325,
    ),
    'TileDepth' =>
    array (
      0 => 32998,
    ),
    'TileOffsets' =>
    array (
      0 => 324,
    ),
    'TimeZoneOffset' =>
    array (
      0 => 34858,
    ),
    'TransferRange' =>
    array (
      0 => 342,
    ),
    'Transformation' =>
    array (
      0 => 48130,
    ),
    'TransparencyIndicator' =>
    array (
      0 => 34028,
    ),
    'TrapIndicator' =>
    array (
      0 => 34031,
    ),
    'UIC1Tag' =>
    array (
      0 => 33628,
    ),
    'UIC2Tag' =>
    array (
      0 => 33629,
    ),
    'UIC3Tag' =>
    array (
      0 => 33630,
    ),
    'UIC4Tag' =>
    array (
      0 => 33631,
    ),
    'USPTOMiscellaneous' =>
    array (
      0 => 999,
    ),
    'USPTOOriginalContentType' =>
    array (
      0 => 50560,
    ),
    'Uncompressed' =>
    array (
      0 => 48131,
    ),
    'UserComment' =>
    array (
      0 => 37510,
    ),
    'VersionYear' =>
    array (
      0 => 404,
    ),
    'WB_GRGBLevels' =>
    array (
      0 => 34306,
    ),
    'WangAnnotation' =>
    array (
      0 => 32932,
    ),
    'WangTag1' =>
    array (
      0 => 32931,
    ),
    'WangTag3' =>
    array (
      0 => 32933,
    ),
    'WangTag4' =>
    array (
      0 => 32934,
    ),
    'WarpQuadrilateral' =>
    array (
      0 => 32955,
    ),
    'WaterDepth' =>
    array (
      0 => 37891,
    ),
    'WhiteBalance' =>
    array (
      0 => 41987,
      1 => 65102,
    ),
    'WidthResolution' =>
    array (
      0 => 48258,
    ),
    'WrapModes' =>
    array (
      0 => 33303,
    ),
    'XClipPathUnits' =>
    array (
      0 => 344,
    ),
    'XP_DIP_XML' =>
    array (
      0 => 18247,
    ),
    'XiaomiModel' =>
    array (
      0 => 39424,
    ),
    'XiaomiSettings' =>
    array (
      0 => 39321,
    ),
    'YClipPathUnits' =>
    array (
      0 => 345,
    ),
  ),
  'itemsByPhpExifTag' =>
  array (
    'ApertureValue' =>
    array (
      0 => 37378,
    ),
    'BatteryLevel' =>
    array (
      0 => 33423,
    ),
    'BrightnessValue' =>
    array (
      0 => 37379,
    ),
    'CFAPattern' =>
    array (
      0 => 41730,
    ),
    'ClipPath' =>
    array (
      0 => 343,
    ),
    'ColorMap' =>
    array (
      0 => 320,
    ),
    'ColorSpace' =>
    array (
      0 => 40961,
    ),
    'ComponentsConfiguration' =>
    array (
      0 => 37121,
    ),
    'CompressedBitsPerPixel' =>
    array (
      0 => 37122,
    ),
    'Contrast' =>
    array (
      0 => 41992,
    ),
    'CustomRendered' =>
    array (
      0 => 41985,
    ),
    'DataType' =>
    array (
      0 => 32996,
    ),
    'DateTimeDigitized' =>
    array (
      0 => 36868,
    ),
    'DateTimeOriginal' =>
    array (
      0 => 36867,
    ),
    'DeviceSettingDescription' =>
    array (
      0 => 41995,
    ),
    'DigitalZoomRatio' =>
    array (
      0 => 41988,
    ),
    'DotRange' =>
    array (
      0 => 336,
    ),
    'ExifImageLength' =>
    array (
      0 => 40963,
    ),
    'ExifImageWidth' =>
    array (
      0 => 40962,
    ),
    'ExifVersion' =>
    array (
      0 => 36864,
    ),
    'ExposureBiasValue' =>
    array (
      0 => 37380,
    ),
    'ExposureIndex' =>
    array (
      0 => 37397,
      1 => 41493,
    ),
    'ExposureMode' =>
    array (
      0 => 41986,
    ),
    'ExposureProgram' =>
    array (
      0 => 34850,
    ),
    'ExposureTime' =>
    array (
      0 => 33434,
    ),
    'ExtraSample' =>
    array (
      0 => 338,
    ),
    'FNumber' =>
    array (
      0 => 33437,
    ),
    'FileSource' =>
    array (
      0 => 41728,
    ),
    'Flash' =>
    array (
      0 => 37385,
    ),
    'FlashEnergy' =>
    array (
      0 => 37387,
      1 => 41483,
    ),
    'FlashPixVersion' =>
    array (
      0 => 40960,
    ),
    'FocalLength' =>
    array (
      0 => 37386,
    ),
    'FocalLengthIn35mmFilm' =>
    array (
      0 => 41989,
    ),
    'FocalPlaneResolutionUnit' =>
    array (
      0 => 37392,
      1 => 41488,
    ),
    'FocalPlaneXResolution' =>
    array (
      0 => 37390,
      1 => 41486,
    ),
    'FocalPlaneYResolution' =>
    array (
      0 => 37391,
      1 => 41487,
    ),
    'FreeByteCounts' =>
    array (
      0 => 289,
    ),
    'FreeOffsets' =>
    array (
      0 => 288,
    ),
    'GainControl' =>
    array (
      0 => 41991,
    ),
    'GrayResponseCurve' =>
    array (
      0 => 291,
    ),
    'ISOSpeedRatings' =>
    array (
      0 => 34855,
    ),
    'IT8ColorTable' =>
    array (
      0 => 34021,
    ),
    'IT8RasterPadding' =>
    array (
      0 => 34019,
    ),
    'ImageDepth' =>
    array (
      0 => 32997,
    ),
    'ImageHistory' =>
    array (
      0 => 37395,
      1 => 41491,
    ),
    'ImageID' =>
    array (
      0 => 32781,
    ),
    'ImageNumber' =>
    array (
      0 => 37393,
      1 => 41489,
    ),
    'ImageUniqueID' =>
    array (
      0 => 42016,
    ),
    'Indexed' =>
    array (
      0 => 346,
    ),
    'InkNames' =>
    array (
      0 => 333,
    ),
    'JPEGACTables' =>
    array (
      0 => 521,
    ),
    'JPEGDCTables' =>
    array (
      0 => 520,
    ),
    'JPEGInterchangeFormat' =>
    array (
      0 => 513,
    ),
    'JPEGInterchangeFormatLength' =>
    array (
      0 => 514,
    ),
    'JPEGLosslessPredictors' =>
    array (
      0 => 517,
    ),
    'JPEGPointTransforms' =>
    array (
      0 => 518,
    ),
    'JPEGProc' =>
    array (
      0 => 512,
    ),
    'JPEGQTables' =>
    array (
      0 => 519,
    ),
    'JPEGRestartInterval' =>
    array (
      0 => 515,
    ),
    'JPEGTables' =>
    array (
      0 => 347,
    ),
    'LightSource' =>
    array (
      0 => 37384,
    ),
    'Matteing' =>
    array (
      0 => 32995,
    ),
    'MaxApertureValue' =>
    array (
      0 => 37381,
    ),
    'MeteringMode' =>
    array (
      0 => 37383,
    ),
    'Noise' =>
    array (
      0 => 37389,
      1 => 41485,
    ),
    'NumberOfInks' =>
    array (
      0 => 334,
    ),
    'OECF' =>
    array (
      0 => 34856,
    ),
    'OPIProxy' =>
    array (
      0 => 351,
    ),
    'RelatedSoundFile' =>
    array (
      0 => 40964,
    ),
    'SMaxSampleValue' =>
    array (
      0 => 341,
    ),
    'SMinSampleValue' =>
    array (
      0 => 340,
    ),
    'Saturation' =>
    array (
      0 => 41993,
    ),
    'SceneCaptureType' =>
    array (
      0 => 41990,
    ),
    'SceneType' =>
    array (
      0 => 41729,
    ),
    'SecurityClassification' =>
    array (
      0 => 37394,
      1 => 41490,
    ),
    'SensingMethod' =>
    array (
      0 => 37399,
      1 => 41495,
    ),
    'Sharpness' =>
    array (
      0 => 41994,
    ),
    'ShutterSpeedValue' =>
    array (
      0 => 37377,
    ),
    'SpatialFrequencyResponse' =>
    array (
      0 => 37388,
      1 => 41484,
    ),
    'SpectralSensity' =>
    array (
      0 => 34852,
    ),
    'StoNits' =>
    array (
      0 => 37439,
    ),
    'StripByteCounts' =>
    array (
      0 => 279,
    ),
    'StripOffsets' =>
    array (
      0 => 273,
    ),
    'SubSecTime' =>
    array (
      0 => 37520,
    ),
    'SubSecTimeDigitized' =>
    array (
      0 => 37522,
    ),
    'SubSecTimeOriginal' =>
    array (
      0 => 37521,
    ),
    'SubjectDistance' =>
    array (
      0 => 37382,
    ),
    'SubjectDistanceRange' =>
    array (
      0 => 41996,
    ),
    'SubjectLocation' =>
    array (
      0 => 37396,
      1 => 41492,
    ),
    'T4Options' =>
    array (
      0 => 292,
    ),
    'T6Options' =>
    array (
      0 => 293,
    ),
    'TIFF/EPStandardID' =>
    array (
      0 => 37398,
      1 => 41494,
    ),
    'TileByteCounts' =>
    array (
      0 => 325,
    ),
    'TileDepth' =>
    array (
      0 => 32998,
    ),
    'TileOffsets' =>
    array (
      0 => 324,
    ),
    'TransferRange' =>
    array (
      0 => 342,
    ),
    'UserComment' =>
    array (
      0 => 37510,
    ),
    'WhiteBalance' =>
    array (
      0 => 41987,
    ),
    'XClipPathUnits' =>
    array (
      0 => 344,
    ),
    'YClipPathUnits' =>
    array (
      0 => 345,
    ),
  ),
  'itemsByExiftoolDOMNode' =>
  array (
    'ExifIFD:Acceleration' =>
    array (
      0 => 37892,
    ),
    'ExifIFD:AdventRevision' =>
    array (
      0 => 33590,
    ),
    'ExifIFD:AdventScale' =>
    array (
      0 => 33589,
    ),
    'ExifIFD:AffineTransformMat' =>
    array (
      0 => 32956,
    ),
    'ExifIFD:AliasLayerMetadata' =>
    array (
      0 => 50784,
    ),
    'ExifIFD:AlphaByteCount' =>
    array (
      0 => 48323,
    ),
    'ExifIFD:AlphaDataDiscard' =>
    array (
      0 => 48325,
    ),
    'ExifIFD:AlphaOffset' =>
    array (
      0 => 48322,
    ),
    'ExifIFD:AmbientTemperature' =>
    array (
      0 => 37888,
    ),
    'ExifIFD:Annotations' =>
    array (
      0 => 50255,
    ),
    'ExifIFD:ApertureValue' =>
    array (
      0 => 37378,
    ),
    'ExifIFD:BackgroundColorIndicator' =>
    array (
      0 => 34024,
    ),
    'ExifIFD:BackgroundColorValue' =>
    array (
      0 => 34026,
    ),
    'ExifIFD:BadFaxLines' =>
    array (
      0 => 326,
    ),
    'ExifIFD:BatteryLevel' =>
    array (
      0 => 33423,
    ),
    'ExifIFD:BitsPerExtendedRunLength' =>
    array (
      0 => 34021,
    ),
    'ExifIFD:BitsPerRunLength' =>
    array (
      0 => 34020,
    ),
    'ExifIFD:Brightness' =>
    array (
      0 => 65107,
    ),
    'ExifIFD:BrightnessValue' =>
    array (
      0 => 37379,
    ),
    'ExifIFD:CFAPattern' =>
    array (
      0 => 41730,
    ),
    'ExifIFD:CIP3DataFile' =>
    array (
      0 => 37434,
    ),
    'ExifIFD:CIP3Sheet' =>
    array (
      0 => 37435,
    ),
    'ExifIFD:CIP3Side' =>
    array (
      0 => 37436,
    ),
    'ExifIFD:CMYKEquivalent' =>
    array (
      0 => 34032,
    ),
    'ExifIFD:CR2CFAPattern' =>
    array (
      0 => 50656,
    ),
    'ExifIFD:CameraElevationAngle' =>
    array (
      0 => 37893,
    ),
    'ExifIFD:CameraFirmware' =>
    array (
      0 => 42041,
    ),
    'ExifIFD:ChrominanceTable' =>
    array (
      0 => 20625,
    ),
    'ExifIFD:CleanFaxData' =>
    array (
      0 => 327,
    ),
    'ExifIFD:ClipPath' =>
    array (
      0 => 343,
    ),
    'ExifIFD:CodingMethods' =>
    array (
      0 => 403,
    ),
    'ExifIFD:ColorCharacterization' =>
    array (
      0 => 34029,
    ),
    'ExifIFD:ColorMap' =>
    array (
      0 => 320,
    ),
    'ExifIFD:ColorResponseUnit' =>
    array (
      0 => 300,
    ),
    'ExifIFD:ColorSequence' =>
    array (
      0 => 34017,
    ),
    'ExifIFD:ColorSpace' =>
    array (
      0 => 40961,
    ),
    'ExifIFD:ColorTable' =>
    array (
      0 => 34022,
    ),
    'ExifIFD:ColorTransferFunction' =>
    array (
      0 => 20506,
    ),
    'ExifIFD:ComponentsConfiguration' =>
    array (
      0 => 37121,
    ),
    'ExifIFD:CompositeImage' =>
    array (
      0 => 42080,
    ),
    'ExifIFD:CompositeImageCount' =>
    array (
      0 => 42081,
    ),
    'ExifIFD:CompositeImageExposureTimes' =>
    array (
      0 => 42082,
    ),
    'ExifIFD:CompressedBitsPerPixel' =>
    array (
      0 => 37122,
    ),
    'ExifIFD:ConsecutiveBadFaxLines' =>
    array (
      0 => 328,
    ),
    'ExifIFD:Contrast' =>
    array (
      0 => 41992,
      1 => 65108,
    ),
    'ExifIFD:Converter' =>
    array (
      0 => 65101,
    ),
    'ExifIFD:CreateDate' =>
    array (
      0 => 36868,
    ),
    'ExifIFD:CustomRendered' =>
    array (
      0 => 41985,
    ),
    'ExifIFD:DataType' =>
    array (
      0 => 32996,
    ),
    'ExifIFD:DateTimeOriginal' =>
    array (
      0 => 36867,
    ),
    'ExifIFD:Decode' =>
    array (
      0 => 433,
    ),
    'ExifIFD:DefaultImageColor' =>
    array (
      0 => 434,
    ),
    'ExifIFD:DeviceSettingDescription' =>
    array (
      0 => 41995,
    ),
    'ExifIFD:DigitalZoomRatio' =>
    array (
      0 => 41988,
    ),
    'ExifIFD:DotRange' =>
    array (
      0 => 336,
    ),
    'ExifIFD:ExifImageHeight' =>
    array (
      0 => 40963,
    ),
    'ExifIFD:ExifImageWidth' =>
    array (
      0 => 40962,
    ),
    'ExifIFD:ExifVersion' =>
    array (
      0 => 36864,
    ),
    'ExifIFD:ExpandFilm' =>
    array (
      0 => 44994,
    ),
    'ExifIFD:ExpandFilterLens' =>
    array (
      0 => 44995,
    ),
    'ExifIFD:ExpandFlashLamp' =>
    array (
      0 => 44997,
    ),
    'ExifIFD:ExpandLens' =>
    array (
      0 => 44993,
    ),
    'ExifIFD:ExpandScanner' =>
    array (
      0 => 44996,
    ),
    'ExifIFD:ExpandSoftware' =>
    array (
      0 => 44992,
    ),
    'ExifIFD:Exposure' =>
    array (
      0 => 65105,
    ),
    'ExifIFD:ExposureCompensation' =>
    array (
      0 => 37380,
    ),
    'ExifIFD:ExposureIndex' =>
    array (
      0 => 37397,
      1 => 41493,
    ),
    'ExifIFD:ExposureMode' =>
    array (
      0 => 41986,
    ),
    'ExifIFD:ExposureProgram' =>
    array (
      0 => 34850,
    ),
    'ExifIFD:ExposureTime' =>
    array (
      0 => 33434,
    ),
    'ExifIFD:ExtraSamples' =>
    array (
      0 => 338,
    ),
    'ExifIFD:FNumber' =>
    array (
      0 => 33437,
    ),
    'ExifIFD:FaxProfile' =>
    array (
      0 => 402,
    ),
    'ExifIFD:FaxRecvParams' =>
    array (
      0 => 34908,
    ),
    'ExifIFD:FaxRecvTime' =>
    array (
      0 => 34910,
    ),
    'ExifIFD:FaxSubAddress' =>
    array (
      0 => 34909,
    ),
    'ExifIFD:FedexEDR' =>
    array (
      0 => 34929,
    ),
    'ExifIFD:FileSource' =>
    array (
      0 => 41728,
    ),
    'ExifIFD:Flash' =>
    array (
      0 => 37385,
    ),
    'ExifIFD:FlashEnergy' =>
    array (
      0 => 37387,
      1 => 41483,
    ),
    'ExifIFD:FlashpixVersion' =>
    array (
      0 => 40960,
    ),
    'ExifIFD:FocalLength' =>
    array (
      0 => 37386,
    ),
    'ExifIFD:FocalLengthIn35mmFormat' =>
    array (
      0 => 41989,
    ),
    'ExifIFD:FocalPlaneResolutionUnit' =>
    array (
      0 => 37392,
      1 => 41488,
    ),
    'ExifIFD:FocalPlaneXResolution' =>
    array (
      0 => 37390,
      1 => 41486,
    ),
    'ExifIFD:FocalPlaneYResolution' =>
    array (
      0 => 37391,
      1 => 41487,
    ),
    'ExifIFD:FovCot' =>
    array (
      0 => 33304,
    ),
    'ExifIFD:FrameDelay' =>
    array (
      0 => 20736,
    ),
    'ExifIFD:FreeByteCounts' =>
    array (
      0 => 289,
    ),
    'ExifIFD:FreeOffsets' =>
    array (
      0 => 288,
    ),
    'ExifIFD:GDALMetadata' =>
    array (
      0 => 42112,
    ),
    'ExifIFD:GDALNoData' =>
    array (
      0 => 42113,
    ),
    'ExifIFD:GainControl' =>
    array (
      0 => 41991,
    ),
    'ExifIFD:Gamma' =>
    array (
      0 => 42240,
    ),
    'ExifIFD:GlobalPalette' =>
    array (
      0 => 20738,
    ),
    'ExifIFD:GooglePlusUploadCode' =>
    array (
      0 => 36873,
    ),
    'ExifIFD:GrayResponseCurve' =>
    array (
      0 => 291,
    ),
    'ExifIFD:GridSize' =>
    array (
      0 => 20497,
    ),
    'ExifIFD:HCUsage' =>
    array (
      0 => 34030,
    ),
    'ExifIFD:HalftoneDegree' =>
    array (
      0 => 20492,
    ),
    'ExifIFD:HalftoneLPI' =>
    array (
      0 => 20490,
    ),
    'ExifIFD:HalftoneLPIUnit' =>
    array (
      0 => 20491,
    ),
    'ExifIFD:HalftoneMisc' =>
    array (
      0 => 20494,
    ),
    'ExifIFD:HalftoneScreen' =>
    array (
      0 => 20495,
    ),
    'ExifIFD:HalftoneShape' =>
    array (
      0 => 20493,
    ),
    'ExifIFD:HasselbladRawImage' =>
    array (
      0 => 46275,
    ),
    'ExifIFD:HeightResolution' =>
    array (
      0 => 48259,
    ),
    'ExifIFD:Humidity' =>
    array (
      0 => 37889,
    ),
    'ExifIFD:INGRReserved' =>
    array (
      0 => 33921,
    ),
    'ExifIFD:ISO' =>
    array (
      0 => 34855,
    ),
    'ExifIFD:ISOSpeed' =>
    array (
      0 => 34867,
    ),
    'ExifIFD:ISOSpeedLatitudeyyy' =>
    array (
      0 => 34868,
    ),
    'ExifIFD:ISOSpeedLatitudezzz' =>
    array (
      0 => 34869,
    ),
    'ExifIFD:IT8Header' =>
    array (
      0 => 34018,
    ),
    'ExifIFD:ImageByteCount' =>
    array (
      0 => 48321,
    ),
    'ExifIFD:ImageColorIndicator' =>
    array (
      0 => 34023,
    ),
    'ExifIFD:ImageColorValue' =>
    array (
      0 => 34025,
    ),
    'ExifIFD:ImageDataDiscard' =>
    array (
      0 => 48324,
    ),
    'ExifIFD:ImageDepth' =>
    array (
      0 => 32997,
    ),
    'ExifIFD:ImageEditingSoftware' =>
    array (
      0 => 42043,
    ),
    'ExifIFD:ImageEditor' =>
    array (
      0 => 42040,
    ),
    'ExifIFD:ImageFullHeight' =>
    array (
      0 => 33301,
    ),
    'ExifIFD:ImageFullWidth' =>
    array (
      0 => 33300,
    ),
    'ExifIFD:ImageHeight' =>
    array (
      0 => 48257,
    ),
    'ExifIFD:ImageHistory' =>
    array (
      0 => 37395,
      1 => 41491,
    ),
    'ExifIFD:ImageID' =>
    array (
      0 => 32781,
    ),
    'ExifIFD:ImageLayer' =>
    array (
      0 => 34732,
    ),
    'ExifIFD:ImageNumber' =>
    array (
      0 => 37393,
      1 => 41489,
    ),
    'ExifIFD:ImageOffset' =>
    array (
      0 => 48320,
    ),
    'ExifIFD:ImageReferencePoints' =>
    array (
      0 => 32953,
    ),
    'ExifIFD:ImageTitle' =>
    array (
      0 => 42038,
    ),
    'ExifIFD:ImageType' =>
    array (
      0 => 48132,
    ),
    'ExifIFD:ImageUniqueID' =>
    array (
      0 => 42016,
    ),
    'ExifIFD:ImageWidth' =>
    array (
      0 => 48256,
    ),
    'ExifIFD:IndexBackground' =>
    array (
      0 => 20739,
    ),
    'ExifIFD:IndexTransparent' =>
    array (
      0 => 20740,
    ),
    'ExifIFD:Indexed' =>
    array (
      0 => 346,
    ),
    'ExifIFD:InkNames' =>
    array (
      0 => 333,
    ),
    'ExifIFD:IntergraphFlagRegisters' =>
    array (
      0 => 33919,
    ),
    'ExifIFD:IntergraphMatrix' =>
    array (
      0 => 33920,
    ),
    'ExifIFD:IntergraphPacketData' =>
    array (
      0 => 33918,
    ),
    'ExifIFD:Interlace' =>
    array (
      0 => 34857,
    ),
    'ExifIFD:JBIGOptions' =>
    array (
      0 => 34750,
    ),
    'ExifIFD:JPEGACTables' =>
    array (
      0 => 521,
    ),
    'ExifIFD:JPEGDCTables' =>
    array (
      0 => 520,
    ),
    'ExifIFD:JPEGLosslessPredictors' =>
    array (
      0 => 517,
    ),
    'ExifIFD:JPEGPointTransforms' =>
    array (
      0 => 518,
    ),
    'ExifIFD:JPEGProc' =>
    array (
      0 => 512,
    ),
    'ExifIFD:JPEGQTables' =>
    array (
      0 => 519,
    ),
    'ExifIFD:JPEGQuality' =>
    array (
      0 => 20496,
    ),
    'ExifIFD:JPEGRestartInterval' =>
    array (
      0 => 515,
    ),
    'ExifIFD:JPEGTables' =>
    array (
      0 => 347,
      1 => 437,
    ),
    'ExifIFD:JPLCartoIFD' =>
    array (
      0 => 34263,
    ),
    'ExifIFD:Lens' =>
    array (
      0 => 65002,
    ),
    'ExifIFD:LensInfo' =>
    array (
      0 => 42034,
    ),
    'ExifIFD:LensMake' =>
    array (
      0 => 42035,
    ),
    'ExifIFD:LensModel' =>
    array (
      0 => 42036,
    ),
    'ExifIFD:LensSerialNumber' =>
    array (
      0 => 42037,
    ),
    'ExifIFD:LightSource' =>
    array (
      0 => 37384,
    ),
    'ExifIFD:LoopCount' =>
    array (
      0 => 20737,
    ),
    'ExifIFD:LuminanceTable' =>
    array (
      0 => 20624,
    ),
    'ExifIFD:MDColorTable' =>
    array (
      0 => 33447,
    ),
    'ExifIFD:MDFileTag' =>
    array (
      0 => 33445,
    ),
    'ExifIFD:MDFileUnits' =>
    array (
      0 => 33452,
    ),
    'ExifIFD:MDLabName' =>
    array (
      0 => 33448,
    ),
    'ExifIFD:MDPrepDate' =>
    array (
      0 => 33450,
    ),
    'ExifIFD:MDPrepTime' =>
    array (
      0 => 33451,
    ),
    'ExifIFD:MDSampleInfo' =>
    array (
      0 => 33449,
    ),
    'ExifIFD:MDScalePixel' =>
    array (
      0 => 33446,
    ),
    'ExifIFD:MSDocumentText' =>
    array (
      0 => 37679,
    ),
    'ExifIFD:MSDocumentTextPosition' =>
    array (
      0 => 37681,
    ),
    'ExifIFD:MSPropertySetStorage' =>
    array (
      0 => 37680,
    ),
    'ExifIFD:MatrixWorldToCamera' =>
    array (
      0 => 33306,
    ),
    'ExifIFD:MatrixWorldToScreen' =>
    array (
      0 => 33305,
    ),
    'ExifIFD:Matteing' =>
    array (
      0 => 32995,
    ),
    'ExifIFD:MaxApertureValue' =>
    array (
      0 => 37381,
    ),
    'ExifIFD:MetadataEditingSoftware' =>
    array (
      0 => 42044,
    ),
    'ExifIFD:MeteringMode' =>
    array (
      0 => 37383,
    ),
    'ExifIFD:ModeNumber' =>
    array (
      0 => 405,
    ),
    'ExifIFD:Model2' =>
    array (
      0 => 33405,
    ),
    'ExifIFD:ModelTiePoint' =>
    array (
      0 => 33922,
    ),
    'ExifIFD:ModelTransform' =>
    array (
      0 => 34264,
    ),
    'ExifIFD:MoireFilter' =>
    array (
      0 => 65112,
    ),
    'ExifIFD:MultiProfiles' =>
    array (
      0 => 34688,
    ),
    'ExifIFD:Noise' =>
    array (
      0 => 37389,
      1 => 41485,
    ),
    'ExifIFD:NumberofInks' =>
    array (
      0 => 334,
    ),
    'ExifIFD:OPIProxy' =>
    array (
      0 => 351,
    ),
    'ExifIFD:OceApplicationSelector' =>
    array (
      0 => 50216,
    ),
    'ExifIFD:OceIDNumber' =>
    array (
      0 => 50217,
    ),
    'ExifIFD:OceImageLogic' =>
    array (
      0 => 50218,
    ),
    'ExifIFD:OceScanjobDesc' =>
    array (
      0 => 50215,
    ),
    'ExifIFD:OffsetSchema' =>
    array (
      0 => 59933,
    ),
    'ExifIFD:OffsetTime' =>
    array (
      0 => 36880,
    ),
    'ExifIFD:OffsetTimeDigitized' =>
    array (
      0 => 36882,
    ),
    'ExifIFD:OffsetTimeOriginal' =>
    array (
      0 => 36881,
    ),
    'ExifIFD:Opto-ElectricConvFactor' =>
    array (
      0 => 34856,
    ),
    'ExifIFD:OriginalFileName' =>
    array (
      0 => 50547,
    ),
    'ExifIFD:OtherImageLength' =>
    array (
      0 => 279,
      1 => 514,
    ),
    'ExifIFD:OtherImageStart' =>
    array (
      0 => 273,
      1 => 513,
    ),
    'ExifIFD:OwnerName' =>
    array (
      0 => 42032,
      1 => 65000,
    ),
    'ExifIFD:PaletteHistogram' =>
    array (
      0 => 20755,
    ),
    'ExifIFD:Photographer' =>
    array (
      0 => 42039,
    ),
    'ExifIFD:PixelFormat' =>
    array (
      0 => 48129,
    ),
    'ExifIFD:PixelIntensityRange' =>
    array (
      0 => 34027,
    ),
    'ExifIFD:PixelMagicJBIGOptions' =>
    array (
      0 => 34232,
    ),
    'ExifIFD:PixelScale' =>
    array (
      0 => 33550,
    ),
    'ExifIFD:PixelUnits' =>
    array (
      0 => 20752,
    ),
    'ExifIFD:PixelsPerUnitX' =>
    array (
      0 => 20753,
    ),
    'ExifIFD:PixelsPerUnitY' =>
    array (
      0 => 20754,
    ),
    'ExifIFD:Pressure' =>
    array (
      0 => 37890,
    ),
    'ExifIFD:PreviewJXLLength' =>
    array (
      0 => 279,
    ),
    'ExifIFD:PreviewJXLStart' =>
    array (
      0 => 273,
    ),
    'ExifIFD:PrintFlags' =>
    array (
      0 => 20485,
    ),
    'ExifIFD:PrintFlagsBleedWidth' =>
    array (
      0 => 20488,
    ),
    'ExifIFD:PrintFlagsBleedWidthScale' =>
    array (
      0 => 20489,
    ),
    'ExifIFD:PrintFlagsCrop' =>
    array (
      0 => 20487,
    ),
    'ExifIFD:PrintFlagsVersion' =>
    array (
      0 => 20486,
    ),
    'ExifIFD:ProfileType' =>
    array (
      0 => 401,
    ),
    'ExifIFD:RAWDevelopingSoftware' =>
    array (
      0 => 42042,
    ),
    'ExifIFD:RasterPadding' =>
    array (
      0 => 34019,
    ),
    'ExifIFD:RawFile' =>
    array (
      0 => 65100,
    ),
    'ExifIFD:RawImageSegmentation' =>
    array (
      0 => 50752,
    ),
    'ExifIFD:RecommendedExposureIndex' =>
    array (
      0 => 34866,
    ),
    'ExifIFD:RegionXformTackPoint' =>
    array (
      0 => 32954,
    ),
    'ExifIFD:RelatedSoundFile' =>
    array (
      0 => 40964,
    ),
    'ExifIFD:RenderingIntent' =>
    array (
      0 => 771,
    ),
    'ExifIFD:ResolutionXLengthUnit' =>
    array (
      0 => 20483,
    ),
    'ExifIFD:ResolutionXUnit' =>
    array (
      0 => 20481,
    ),
    'ExifIFD:ResolutionYLengthUnit' =>
    array (
      0 => 20484,
    ),
    'ExifIFD:ResolutionYUnit' =>
    array (
      0 => 20482,
    ),
    'ExifIFD:RowInterleaveFactor' =>
    array (
      0 => 50975,
    ),
    'ExifIFD:SMaxSampleValue' =>
    array (
      0 => 341,
    ),
    'ExifIFD:SMinSampleValue' =>
    array (
      0 => 340,
    ),
    'ExifIFD:SamsungRawByteOrder' =>
    array (
      0 => 41217,
    ),
    'ExifIFD:SamsungRawPointersLength' =>
    array (
      0 => 40977,
    ),
    'ExifIFD:SamsungRawPointersOffset' =>
    array (
      0 => 40976,
    ),
    'ExifIFD:SamsungRawUnknown' =>
    array (
      0 => 41218,
    ),
    'ExifIFD:Saturation' =>
    array (
      0 => 41993,
      1 => 65109,
    ),
    'ExifIFD:SceneCaptureType' =>
    array (
      0 => 41990,
    ),
    'ExifIFD:SceneType' =>
    array (
      0 => 41729,
    ),
    'ExifIFD:SecurityClassification' =>
    array (
      0 => 37394,
      1 => 41490,
    ),
    'ExifIFD:SelfTimerMode' =>
    array (
      0 => 34859,
    ),
    'ExifIFD:SensingMethod' =>
    array (
      0 => 37399,
      1 => 41495,
    ),
    'ExifIFD:SensitivityType' =>
    array (
      0 => 34864,
    ),
    'ExifIFD:SerialNumber' =>
    array (
      0 => 42033,
      1 => 65001,
    ),
    'ExifIFD:Shadows' =>
    array (
      0 => 65106,
    ),
    'ExifIFD:SharedData' =>
    array (
      0 => 34689,
    ),
    'ExifIFD:Sharpness' =>
    array (
      0 => 41994,
      1 => 65110,
    ),
    'ExifIFD:ShutterSpeedValue' =>
    array (
      0 => 37377,
    ),
    'ExifIFD:Site' =>
    array (
      0 => 34016,
    ),
    'ExifIFD:Smoothness' =>
    array (
      0 => 65111,
    ),
    'ExifIFD:SonyRawFileType' =>
    array (
      0 => 28672,
    ),
    'ExifIFD:SonyToneCurve' =>
    array (
      0 => 28688,
    ),
    'ExifIFD:SpatialFrequencyResponse' =>
    array (
      0 => 37388,
      1 => 41484,
    ),
    'ExifIFD:SpectralSensitivity' =>
    array (
      0 => 34852,
    ),
    'ExifIFD:StandardOutputSensitivity' =>
    array (
      0 => 34865,
    ),
    'ExifIFD:StoNits' =>
    array (
      0 => 37439,
    ),
    'ExifIFD:StripByteCounts' =>
    array (
      0 => 279,
    ),
    'ExifIFD:StripOffsets' =>
    array (
      0 => 273,
    ),
    'ExifIFD:StripRowCounts' =>
    array (
      0 => 559,
    ),
    'ExifIFD:SubSecTime' =>
    array (
      0 => 37520,
    ),
    'ExifIFD:SubSecTimeDigitized' =>
    array (
      0 => 37522,
    ),
    'ExifIFD:SubSecTimeOriginal' =>
    array (
      0 => 37521,
    ),
    'ExifIFD:SubTileBlockSize' =>
    array (
      0 => 50974,
    ),
    'ExifIFD:SubjectArea' =>
    array (
      0 => 37396,
    ),
    'ExifIFD:SubjectDistance' =>
    array (
      0 => 37382,
    ),
    'ExifIFD:SubjectDistanceRange' =>
    array (
      0 => 41996,
    ),
    'ExifIFD:SubjectLocation' =>
    array (
      0 => 41492,
    ),
    'ExifIFD:T4Options' =>
    array (
      0 => 292,
    ),
    'ExifIFD:T6Options' =>
    array (
      0 => 293,
    ),
    'ExifIFD:T82Options' =>
    array (
      0 => 435,
    ),
    'ExifIFD:T88Options' =>
    array (
      0 => 34690,
    ),
    'ExifIFD:TIFF-EPStandardID' =>
    array (
      0 => 37398,
      1 => 41494,
    ),
    'ExifIFD:TIFF_FXExtensions' =>
    array (
      0 => 34687,
    ),
    'ExifIFD:TextureFormat' =>
    array (
      0 => 33302,
    ),
    'ExifIFD:ThumbnailArtist' =>
    array (
      0 => 20532,
    ),
    'ExifIFD:ThumbnailBitsPerSample' =>
    array (
      0 => 20514,
    ),
    'ExifIFD:ThumbnailColorDepth' =>
    array (
      0 => 20501,
    ),
    'ExifIFD:ThumbnailCompressedSize' =>
    array (
      0 => 20505,
    ),
    'ExifIFD:ThumbnailCompression' =>
    array (
      0 => 20515,
    ),
    'ExifIFD:ThumbnailCopyright' =>
    array (
      0 => 20539,
    ),
    'ExifIFD:ThumbnailData' =>
    array (
      0 => 20507,
    ),
    'ExifIFD:ThumbnailDateTime' =>
    array (
      0 => 20531,
    ),
    'ExifIFD:ThumbnailDescription' =>
    array (
      0 => 20517,
    ),
    'ExifIFD:ThumbnailEquipMake' =>
    array (
      0 => 20518,
    ),
    'ExifIFD:ThumbnailEquipModel' =>
    array (
      0 => 20519,
    ),
    'ExifIFD:ThumbnailFormat' =>
    array (
      0 => 20498,
    ),
    'ExifIFD:ThumbnailHeight' =>
    array (
      0 => 20500,
    ),
    'ExifIFD:ThumbnailImageHeight' =>
    array (
      0 => 20513,
    ),
    'ExifIFD:ThumbnailImageWidth' =>
    array (
      0 => 20512,
    ),
    'ExifIFD:ThumbnailLength' =>
    array (
      0 => 20504,
    ),
    'ExifIFD:ThumbnailOrientation' =>
    array (
      0 => 20521,
    ),
    'ExifIFD:ThumbnailPhotometricInterp' =>
    array (
      0 => 20516,
    ),
    'ExifIFD:ThumbnailPlanarConfig' =>
    array (
      0 => 20527,
    ),
    'ExifIFD:ThumbnailPlanes' =>
    array (
      0 => 20502,
    ),
    'ExifIFD:ThumbnailPrimaryChromaticities' =>
    array (
      0 => 20534,
    ),
    'ExifIFD:ThumbnailRawBytes' =>
    array (
      0 => 20503,
    ),
    'ExifIFD:ThumbnailRefBlackWhite' =>
    array (
      0 => 20538,
    ),
    'ExifIFD:ThumbnailResolutionUnit' =>
    array (
      0 => 20528,
    ),
    'ExifIFD:ThumbnailResolutionX' =>
    array (
      0 => 20525,
    ),
    'ExifIFD:ThumbnailResolutionY' =>
    array (
      0 => 20526,
    ),
    'ExifIFD:ThumbnailRowsPerStrip' =>
    array (
      0 => 20523,
    ),
    'ExifIFD:ThumbnailSamplesPerPixel' =>
    array (
      0 => 20522,
    ),
    'ExifIFD:ThumbnailSoftware' =>
    array (
      0 => 20530,
    ),
    'ExifIFD:ThumbnailStripByteCounts' =>
    array (
      0 => 20524,
    ),
    'ExifIFD:ThumbnailStripOffsets' =>
    array (
      0 => 20520,
    ),
    'ExifIFD:ThumbnailTransferFunction' =>
    array (
      0 => 20529,
    ),
    'ExifIFD:ThumbnailWhitePoint' =>
    array (
      0 => 20533,
    ),
    'ExifIFD:ThumbnailWidth' =>
    array (
      0 => 20499,
    ),
    'ExifIFD:ThumbnailYCbCrCoefficients' =>
    array (
      0 => 20535,
    ),
    'ExifIFD:ThumbnailYCbCrPositioning' =>
    array (
      0 => 20537,
    ),
    'ExifIFD:ThumbnailYCbCrSubsampling' =>
    array (
      0 => 20536,
    ),
    'ExifIFD:TileByteCounts' =>
    array (
      0 => 325,
    ),
    'ExifIFD:TileDepth' =>
    array (
      0 => 32998,
    ),
    'ExifIFD:TileOffsets' =>
    array (
      0 => 324,
    ),
    'ExifIFD:TimeZoneOffset' =>
    array (
      0 => 34858,
    ),
    'ExifIFD:TransferRange' =>
    array (
      0 => 342,
    ),
    'ExifIFD:Transformation' =>
    array (
      0 => 48130,
    ),
    'ExifIFD:TransparencyIndicator' =>
    array (
      0 => 34028,
    ),
    'ExifIFD:TrapIndicator' =>
    array (
      0 => 34031,
    ),
    'ExifIFD:UIC1Tag' =>
    array (
      0 => 33628,
    ),
    'ExifIFD:UIC2Tag' =>
    array (
      0 => 33629,
    ),
    'ExifIFD:UIC3Tag' =>
    array (
      0 => 33630,
    ),
    'ExifIFD:UIC4Tag' =>
    array (
      0 => 33631,
    ),
    'ExifIFD:USPTOMiscellaneous' =>
    array (
      0 => 999,
    ),
    'ExifIFD:USPTOOriginalContentType' =>
    array (
      0 => 50560,
    ),
    'ExifIFD:Uncompressed' =>
    array (
      0 => 48131,
    ),
    'ExifIFD:UserComment' =>
    array (
      0 => 37510,
    ),
    'ExifIFD:VersionYear' =>
    array (
      0 => 404,
    ),
    'ExifIFD:WB_GRGBLevels' =>
    array (
      0 => 34306,
    ),
    'ExifIFD:WangAnnotation' =>
    array (
      0 => 32932,
    ),
    'ExifIFD:WangTag1' =>
    array (
      0 => 32931,
    ),
    'ExifIFD:WangTag3' =>
    array (
      0 => 32933,
    ),
    'ExifIFD:WangTag4' =>
    array (
      0 => 32934,
    ),
    'ExifIFD:WarpQuadrilateral' =>
    array (
      0 => 32955,
    ),
    'ExifIFD:WaterDepth' =>
    array (
      0 => 37891,
    ),
    'ExifIFD:WhiteBalance' =>
    array (
      0 => 41987,
      1 => 65102,
    ),
    'ExifIFD:WidthResolution' =>
    array (
      0 => 48258,
    ),
    'ExifIFD:WrapModes' =>
    array (
      0 => 33303,
    ),
    'ExifIFD:XClipPathUnits' =>
    array (
      0 => 344,
    ),
    'ExifIFD:XP_DIP_XML' =>
    array (
      0 => 18247,
    ),
    'ExifIFD:XiaomiModel' =>
    array (
      0 => 39424,
    ),
    'ExifIFD:XiaomiSettings' =>
    array (
      0 => 39321,
    ),
    'ExifIFD:YClipPathUnits' =>
    array (
      0 => 345,
    ),
  ),
  'items' =>
  array (
    273 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'StripOffsets',
        'title' => 'Strip Offsets',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'StripOffsets',
        'exiftoolDOMNode' => 'ExifIFD:StripOffsets',
      ),
      1 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OtherImageStart',
        'title' => 'Other Image Start',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'StripOffsets',
        'exiftoolDOMNode' => 'ExifIFD:OtherImageStart',
      ),
      2 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PreviewJXLStart',
        'title' => 'Preview JXL Start',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'StripOffsets',
        'exiftoolDOMNode' => 'ExifIFD:PreviewJXLStart',
      ),
      3 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'StripOffsets',
        'title' => 'Strip Offsets',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'StripOffsets',
        'exiftoolDOMNode' => 'ExifIFD:StripOffsets',
      ),
    ),
    279 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'StripByteCounts',
        'title' => 'Strip Byte Counts',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'StripByteCounts',
        'exiftoolDOMNode' => 'ExifIFD:StripByteCounts',
      ),
      1 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OtherImageLength',
        'title' => 'Other Image Length',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'StripByteCounts',
        'exiftoolDOMNode' => 'ExifIFD:OtherImageLength',
      ),
      2 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PreviewJXLLength',
        'title' => 'Preview JXL Length',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'StripByteCounts',
        'exiftoolDOMNode' => 'ExifIFD:PreviewJXLLength',
      ),
      3 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'StripByteCounts',
        'title' => 'Strip Byte Counts',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'StripByteCounts',
        'exiftoolDOMNode' => 'ExifIFD:StripByteCounts',
      ),
    ),
    288 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FreeOffsets',
        'title' => 'Free Offsets',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'FreeOffsets',
        'exiftoolDOMNode' => 'ExifIFD:FreeOffsets',
      ),
    ),
    289 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FreeByteCounts',
        'title' => 'Free Byte Counts',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'FreeByteCounts',
        'exiftoolDOMNode' => 'ExifIFD:FreeByteCounts',
      ),
    ),
    291 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'GrayResponseCurve',
        'title' => 'Gray Response Curve',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'GrayResponseCurve',
        'exiftoolDOMNode' => 'ExifIFD:GrayResponseCurve',
      ),
    ),
    292 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'T4Options',
        'title' => 'T4 Options',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            'Bit0' => '2-Dimensional encoding',
            'Bit1' => 'Uncompressed',
            'Bit2' => 'Fill bits added',
          ),
        ),
        'phpExifTag' => 'T4Options',
        'exiftoolDOMNode' => 'ExifIFD:T4Options',
      ),
    ),
    293 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'T6Options',
        'title' => 'T6 Options',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            'Bit1' => 'Uncompressed',
          ),
        ),
        'phpExifTag' => 'T6Options',
        'exiftoolDOMNode' => 'ExifIFD:T6Options',
      ),
    ),
    300 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ColorResponseUnit',
        'title' => 'Color Response Unit',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ColorResponseUnit',
      ),
    ),
    320 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ColorMap',
        'title' => 'Color Map',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'ColorMap',
        'exiftoolDOMNode' => 'ExifIFD:ColorMap',
      ),
    ),
    324 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'TileOffsets',
        'title' => 'Tile Offsets',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'TileOffsets',
        'exiftoolDOMNode' => 'ExifIFD:TileOffsets',
      ),
    ),
    325 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'TileByteCounts',
        'title' => 'Tile Byte Counts',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'TileByteCounts',
        'exiftoolDOMNode' => 'ExifIFD:TileByteCounts',
      ),
    ),
    326 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'BadFaxLines',
        'title' => 'Bad Fax Lines',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:BadFaxLines',
      ),
    ),
    327 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CleanFaxData',
        'title' => 'Clean Fax Data',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Clean',
            1 => 'Regenerated',
            2 => 'Unclean',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:CleanFaxData',
      ),
    ),
    328 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ConsecutiveBadFaxLines',
        'title' => 'Consecutive Bad Fax Lines',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ConsecutiveBadFaxLines',
      ),
    ),
    333 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'InkNames',
        'title' => 'Ink Names',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'InkNames',
        'exiftoolDOMNode' => 'ExifIFD:InkNames',
      ),
    ),
    334 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'NumberofInks',
        'title' => 'Numberof Inks',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'NumberOfInks',
        'exiftoolDOMNode' => 'ExifIFD:NumberofInks',
      ),
    ),
    336 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'DotRange',
        'title' => 'Dot Range',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'DotRange',
        'exiftoolDOMNode' => 'ExifIFD:DotRange',
      ),
    ),
    338 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExtraSamples',
        'title' => 'Extra Samples',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Unspecified',
            1 => 'Associated Alpha',
            2 => 'Unassociated Alpha',
          ),
        ),
        'phpExifTag' => 'ExtraSample',
        'exiftoolDOMNode' => 'ExifIFD:ExtraSamples',
      ),
    ),
    340 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SMinSampleValue',
        'title' => 'S Min Sample Value',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'SMinSampleValue',
        'exiftoolDOMNode' => 'ExifIFD:SMinSampleValue',
      ),
    ),
    341 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SMaxSampleValue',
        'title' => 'S Max Sample Value',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'SMaxSampleValue',
        'exiftoolDOMNode' => 'ExifIFD:SMaxSampleValue',
      ),
    ),
    342 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'TransferRange',
        'title' => 'Transfer Range',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'TransferRange',
        'exiftoolDOMNode' => 'ExifIFD:TransferRange',
      ),
    ),
    343 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ClipPath',
        'title' => 'Clip Path',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'ClipPath',
        'exiftoolDOMNode' => 'ExifIFD:ClipPath',
      ),
    ),
    344 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'XClipPathUnits',
        'title' => 'X Clip Path Units',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'XClipPathUnits',
        'exiftoolDOMNode' => 'ExifIFD:XClipPathUnits',
      ),
    ),
    345 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'YClipPathUnits',
        'title' => 'Y Clip Path Units',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'YClipPathUnits',
        'exiftoolDOMNode' => 'ExifIFD:YClipPathUnits',
      ),
    ),
    346 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Indexed',
        'title' => 'Indexed',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Not indexed',
            1 => 'Indexed',
          ),
        ),
        'phpExifTag' => 'Indexed',
        'exiftoolDOMNode' => 'ExifIFD:Indexed',
      ),
    ),
    347 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JPEGTables',
        'title' => 'JPEG Tables',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'JPEGTables',
        'exiftoolDOMNode' => 'ExifIFD:JPEGTables',
      ),
    ),
    351 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OPIProxy',
        'title' => 'OPI Proxy',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Higher resolution image does not exist',
            1 => 'Higher resolution image exists',
          ),
        ),
        'phpExifTag' => 'OPIProxy',
        'exiftoolDOMNode' => 'ExifIFD:OPIProxy',
      ),
    ),
    401 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ProfileType',
        'title' => 'Profile Type',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Unspecified',
            1 => 'Group 3 FAX',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:ProfileType',
      ),
    ),
    402 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FaxProfile',
        'title' => 'Fax Profile',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Unknown',
            1 => 'Minimal B&W lossless, S',
            2 => 'Extended B&W lossless, F',
            3 => 'Lossless JBIG B&W, J',
            4 => 'Lossy color and grayscale, C',
            5 => 'Lossless color and grayscale, L',
            6 => 'Mixed raster content, M',
            7 => 'Profile T',
            255 => 'Multi Profiles',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:FaxProfile',
      ),
    ),
    403 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CodingMethods',
        'title' => 'Coding Methods',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            'Bit0' => 'Unspecified compression',
            'Bit1' => 'Modified Huffman',
            'Bit2' => 'Modified Read',
            'Bit3' => 'Modified MR',
            'Bit4' => 'JBIG',
            'Bit5' => 'Baseline JPEG',
            'Bit6' => 'JBIG color',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:CodingMethods',
      ),
    ),
    404 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'VersionYear',
        'title' => 'Version Year',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:VersionYear',
      ),
    ),
    405 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ModeNumber',
        'title' => 'Mode Number',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ModeNumber',
      ),
    ),
    433 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Decode',
        'title' => 'Decode',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Decode',
      ),
    ),
    434 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'DefaultImageColor',
        'title' => 'Default Image Color',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:DefaultImageColor',
      ),
    ),
    435 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'T82Options',
        'title' => 'T82 Options',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:T82Options',
      ),
    ),
    437 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JPEGTables',
        'title' => 'JPEG Tables',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:JPEGTables',
      ),
    ),
    512 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JPEGProc',
        'title' => 'JPEG Proc',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            1 => 'Baseline',
            14 => 'Lossless',
          ),
        ),
        'phpExifTag' => 'JPEGProc',
        'exiftoolDOMNode' => 'ExifIFD:JPEGProc',
      ),
    ),
    513 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OtherImageStart',
        'title' => 'Other Image Start',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'JPEGInterchangeFormat',
        'exiftoolDOMNode' => 'ExifIFD:OtherImageStart',
      ),
    ),
    514 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OtherImageLength',
        'title' => 'Other Image Length',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'JPEGInterchangeFormatLength',
        'exiftoolDOMNode' => 'ExifIFD:OtherImageLength',
      ),
    ),
    515 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JPEGRestartInterval',
        'title' => 'JPEG Restart Interval',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'JPEGRestartInterval',
        'exiftoolDOMNode' => 'ExifIFD:JPEGRestartInterval',
      ),
    ),
    517 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JPEGLosslessPredictors',
        'title' => 'JPEG Lossless Predictors',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'JPEGLosslessPredictors',
        'exiftoolDOMNode' => 'ExifIFD:JPEGLosslessPredictors',
      ),
    ),
    518 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JPEGPointTransforms',
        'title' => 'JPEG Point Transforms',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'JPEGPointTransforms',
        'exiftoolDOMNode' => 'ExifIFD:JPEGPointTransforms',
      ),
    ),
    519 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JPEGQTables',
        'title' => 'JPEGQ Tables',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'JPEGQTables',
        'exiftoolDOMNode' => 'ExifIFD:JPEGQTables',
      ),
    ),
    520 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JPEGDCTables',
        'title' => 'JPEGDC Tables',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'JPEGDCTables',
        'exiftoolDOMNode' => 'ExifIFD:JPEGDCTables',
      ),
    ),
    521 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JPEGACTables',
        'title' => 'JPEGAC Tables',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'JPEGACTables',
        'exiftoolDOMNode' => 'ExifIFD:JPEGACTables',
      ),
    ),
    559 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'StripRowCounts',
        'title' => 'Strip Row Counts',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:StripRowCounts',
      ),
    ),
    771 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'RenderingIntent',
        'title' => 'Rendering Intent',
        'format' =>
        array (
          0 => 1,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Perceptual',
            1 => 'Relative Colorimetric',
            2 => 'Saturation',
            3 => 'Absolute colorimetric',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:RenderingIntent',
      ),
    ),
    999 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'USPTOMiscellaneous',
        'title' => 'USPTO Miscellaneous',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:USPTOMiscellaneous',
      ),
    ),
    18247 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'XP_DIP_XML',
        'title' => 'XP DIP XML',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:XP_DIP_XML',
      ),
    ),
    20481 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ResolutionXUnit',
        'title' => 'Resolution X Unit',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ResolutionXUnit',
      ),
    ),
    20482 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ResolutionYUnit',
        'title' => 'Resolution Y Unit',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ResolutionYUnit',
      ),
    ),
    20483 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ResolutionXLengthUnit',
        'title' => 'Resolution X Length Unit',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ResolutionXLengthUnit',
      ),
    ),
    20484 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ResolutionYLengthUnit',
        'title' => 'Resolution Y Length Unit',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ResolutionYLengthUnit',
      ),
    ),
    20485 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PrintFlags',
        'title' => 'Print Flags',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PrintFlags',
      ),
    ),
    20486 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PrintFlagsVersion',
        'title' => 'Print Flags Version',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PrintFlagsVersion',
      ),
    ),
    20487 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PrintFlagsCrop',
        'title' => 'Print Flags Crop',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PrintFlagsCrop',
      ),
    ),
    20488 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PrintFlagsBleedWidth',
        'title' => 'Print Flags Bleed Width',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PrintFlagsBleedWidth',
      ),
    ),
    20489 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PrintFlagsBleedWidthScale',
        'title' => 'Print Flags Bleed Width Scale',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PrintFlagsBleedWidthScale',
      ),
    ),
    20490 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'HalftoneLPI',
        'title' => 'Halftone LPI',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:HalftoneLPI',
      ),
    ),
    20491 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'HalftoneLPIUnit',
        'title' => 'Halftone LPI Unit',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:HalftoneLPIUnit',
      ),
    ),
    20492 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'HalftoneDegree',
        'title' => 'Halftone Degree',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:HalftoneDegree',
      ),
    ),
    20493 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'HalftoneShape',
        'title' => 'Halftone Shape',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:HalftoneShape',
      ),
    ),
    20494 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'HalftoneMisc',
        'title' => 'Halftone Misc',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:HalftoneMisc',
      ),
    ),
    20495 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'HalftoneScreen',
        'title' => 'Halftone Screen',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:HalftoneScreen',
      ),
    ),
    20496 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JPEGQuality',
        'title' => 'JPEG Quality',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:JPEGQuality',
      ),
    ),
    20497 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'GridSize',
        'title' => 'Grid Size',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:GridSize',
      ),
    ),
    20498 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailFormat',
        'title' => 'Thumbnail Format',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailFormat',
      ),
    ),
    20499 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailWidth',
        'title' => 'Thumbnail Width',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailWidth',
      ),
    ),
    20500 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailHeight',
        'title' => 'Thumbnail Height',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailHeight',
      ),
    ),
    20501 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailColorDepth',
        'title' => 'Thumbnail Color Depth',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailColorDepth',
      ),
    ),
    20502 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailPlanes',
        'title' => 'Thumbnail Planes',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailPlanes',
      ),
    ),
    20503 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailRawBytes',
        'title' => 'Thumbnail Raw Bytes',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailRawBytes',
      ),
    ),
    20504 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailLength',
        'title' => 'Thumbnail Length',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailLength',
      ),
    ),
    20505 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailCompressedSize',
        'title' => 'Thumbnail Compressed Size',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailCompressedSize',
      ),
    ),
    20506 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ColorTransferFunction',
        'title' => 'Color Transfer Function',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ColorTransferFunction',
      ),
    ),
    20507 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailData',
        'title' => 'Thumbnail Data',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailData',
      ),
    ),
    20512 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailImageWidth',
        'title' => 'Thumbnail Image Width',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailImageWidth',
      ),
    ),
    20513 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailImageHeight',
        'title' => 'Thumbnail Image Height',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailImageHeight',
      ),
    ),
    20514 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailBitsPerSample',
        'title' => 'Thumbnail Bits Per Sample',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailBitsPerSample',
      ),
    ),
    20515 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailCompression',
        'title' => 'Thumbnail Compression',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailCompression',
      ),
    ),
    20516 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailPhotometricInterp',
        'title' => 'Thumbnail Photometric Interp',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailPhotometricInterp',
      ),
    ),
    20517 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailDescription',
        'title' => 'Thumbnail Description',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailDescription',
      ),
    ),
    20518 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailEquipMake',
        'title' => 'Thumbnail Equip Make',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailEquipMake',
      ),
    ),
    20519 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailEquipModel',
        'title' => 'Thumbnail Equip Model',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailEquipModel',
      ),
    ),
    20520 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailStripOffsets',
        'title' => 'Thumbnail Strip Offsets',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailStripOffsets',
      ),
    ),
    20521 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailOrientation',
        'title' => 'Thumbnail Orientation',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailOrientation',
      ),
    ),
    20522 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailSamplesPerPixel',
        'title' => 'Thumbnail Samples Per Pixel',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailSamplesPerPixel',
      ),
    ),
    20523 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailRowsPerStrip',
        'title' => 'Thumbnail Rows Per Strip',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailRowsPerStrip',
      ),
    ),
    20524 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailStripByteCounts',
        'title' => 'Thumbnail Strip Byte Counts',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailStripByteCounts',
      ),
    ),
    20525 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailResolutionX',
        'title' => 'Thumbnail Resolution X',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailResolutionX',
      ),
    ),
    20526 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailResolutionY',
        'title' => 'Thumbnail Resolution Y',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailResolutionY',
      ),
    ),
    20527 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailPlanarConfig',
        'title' => 'Thumbnail Planar Config',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailPlanarConfig',
      ),
    ),
    20528 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailResolutionUnit',
        'title' => 'Thumbnail Resolution Unit',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailResolutionUnit',
      ),
    ),
    20529 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailTransferFunction',
        'title' => 'Thumbnail Transfer Function',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailTransferFunction',
      ),
    ),
    20530 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailSoftware',
        'title' => 'Thumbnail Software',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailSoftware',
      ),
    ),
    20531 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailDateTime',
        'title' => 'Thumbnail Date Time',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailDateTime',
      ),
    ),
    20532 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailArtist',
        'title' => 'Thumbnail Artist',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailArtist',
      ),
    ),
    20533 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailWhitePoint',
        'title' => 'Thumbnail White Point',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailWhitePoint',
      ),
    ),
    20534 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailPrimaryChromaticities',
        'title' => 'Thumbnail Primary Chromaticities',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailPrimaryChromaticities',
      ),
    ),
    20535 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailYCbCrCoefficients',
        'title' => 'Thumbnail Y Cb Cr Coefficients',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailYCbCrCoefficients',
      ),
    ),
    20536 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailYCbCrSubsampling',
        'title' => 'Thumbnail Y Cb Cr Subsampling',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailYCbCrSubsampling',
      ),
    ),
    20537 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailYCbCrPositioning',
        'title' => 'Thumbnail Y Cb Cr Positioning',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailYCbCrPositioning',
      ),
    ),
    20538 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailRefBlackWhite',
        'title' => 'Thumbnail Ref Black White',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailRefBlackWhite',
      ),
    ),
    20539 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ThumbnailCopyright',
        'title' => 'Thumbnail Copyright',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ThumbnailCopyright',
      ),
    ),
    20624 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'LuminanceTable',
        'title' => 'Luminance Table',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:LuminanceTable',
      ),
    ),
    20625 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ChrominanceTable',
        'title' => 'Chrominance Table',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ChrominanceTable',
      ),
    ),
    20736 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FrameDelay',
        'title' => 'Frame Delay',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:FrameDelay',
      ),
    ),
    20737 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'LoopCount',
        'title' => 'Loop Count',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:LoopCount',
      ),
    ),
    20738 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'GlobalPalette',
        'title' => 'Global Palette',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:GlobalPalette',
      ),
    ),
    20739 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'IndexBackground',
        'title' => 'Index Background',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:IndexBackground',
      ),
    ),
    20740 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'IndexTransparent',
        'title' => 'Index Transparent',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:IndexTransparent',
      ),
    ),
    20752 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PixelUnits',
        'title' => 'Pixel Units',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PixelUnits',
      ),
    ),
    20753 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PixelsPerUnitX',
        'title' => 'Pixels Per Unit X',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PixelsPerUnitX',
      ),
    ),
    20754 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PixelsPerUnitY',
        'title' => 'Pixels Per Unit Y',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PixelsPerUnitY',
      ),
    ),
    20755 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PaletteHistogram',
        'title' => 'Palette Histogram',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PaletteHistogram',
      ),
    ),
    28672 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SonyRawFileType',
        'title' => 'Sony Raw File Type',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Sony Uncompressed 14-bit RAW',
            1 => 'Sony Uncompressed 12-bit RAW',
            2 => 'Sony Compressed RAW',
            3 => 'Sony Lossless Compressed RAW',
            4 => 'Sony Lossless Compressed RAW 2',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:SonyRawFileType',
      ),
    ),
    28688 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SonyToneCurve',
        'title' => 'Sony Tone Curve',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:SonyToneCurve',
      ),
    ),
    32781 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageID',
        'title' => 'Image ID',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'ImageID',
        'exiftoolDOMNode' => 'ExifIFD:ImageID',
      ),
    ),
    32931 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'WangTag1',
        'title' => 'Wang Tag 1',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:WangTag1',
      ),
    ),
    32932 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'WangAnnotation',
        'title' => 'Wang Annotation',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:WangAnnotation',
      ),
    ),
    32933 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'WangTag3',
        'title' => 'Wang Tag 3',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:WangTag3',
      ),
    ),
    32934 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'WangTag4',
        'title' => 'Wang Tag 4',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:WangTag4',
      ),
    ),
    32953 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageReferencePoints',
        'title' => 'Image Reference Points',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageReferencePoints',
      ),
    ),
    32954 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'RegionXformTackPoint',
        'title' => 'Region Xform Tack Point',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:RegionXformTackPoint',
      ),
    ),
    32955 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'WarpQuadrilateral',
        'title' => 'Warp Quadrilateral',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:WarpQuadrilateral',
      ),
    ),
    32956 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'AffineTransformMat',
        'title' => 'Affine Transform Mat',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:AffineTransformMat',
      ),
    ),
    32995 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Matteing',
        'title' => 'Matteing',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'Matteing',
        'exiftoolDOMNode' => 'ExifIFD:Matteing',
      ),
    ),
    32996 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'DataType',
        'title' => 'Data Type',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'DataType',
        'exiftoolDOMNode' => 'ExifIFD:DataType',
      ),
    ),
    32997 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageDepth',
        'title' => 'Image Depth',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'ImageDepth',
        'exiftoolDOMNode' => 'ExifIFD:ImageDepth',
      ),
    ),
    32998 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'TileDepth',
        'title' => 'Tile Depth',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'TileDepth',
        'exiftoolDOMNode' => 'ExifIFD:TileDepth',
      ),
    ),
    33300 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageFullWidth',
        'title' => 'Image Full Width',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageFullWidth',
      ),
    ),
    33301 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageFullHeight',
        'title' => 'Image Full Height',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageFullHeight',
      ),
    ),
    33302 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'TextureFormat',
        'title' => 'Texture Format',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:TextureFormat',
      ),
    ),
    33303 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'WrapModes',
        'title' => 'Wrap Modes',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:WrapModes',
      ),
    ),
    33304 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FovCot',
        'title' => 'Fov Cot',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:FovCot',
      ),
    ),
    33305 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MatrixWorldToScreen',
        'title' => 'Matrix World To Screen',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MatrixWorldToScreen',
      ),
    ),
    33306 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MatrixWorldToCamera',
        'title' => 'Matrix World To Camera',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MatrixWorldToCamera',
      ),
    ),
    33405 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Model2',
        'title' => 'Model 2',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Model2',
      ),
    ),
    33423 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'BatteryLevel',
        'title' => 'Battery Level',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'BatteryLevel',
        'exiftoolDOMNode' => 'ExifIFD:BatteryLevel',
      ),
    ),
    33434 =>
    array (
      0 =>
      array (
        'components' => 1,
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifExposureTime',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExposureTime',
        'title' => 'Exposure Time',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'ExposureTime',
        'exiftoolDOMNode' => 'ExifIFD:ExposureTime',
      ),
    ),
    33437 =>
    array (
      0 =>
      array (
        'components' => 1,
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifFNumber',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FNumber',
        'title' => 'F Number',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'FNumber',
        'exiftoolDOMNode' => 'ExifIFD:FNumber',
      ),
    ),
    33445 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MDFileTag',
        'title' => 'MD File Tag',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MDFileTag',
      ),
    ),
    33446 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MDScalePixel',
        'title' => 'MD Scale Pixel',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MDScalePixel',
      ),
    ),
    33447 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MDColorTable',
        'title' => 'MD Color Table',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MDColorTable',
      ),
    ),
    33448 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MDLabName',
        'title' => 'MD Lab Name',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MDLabName',
      ),
    ),
    33449 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MDSampleInfo',
        'title' => 'MD Sample Info',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MDSampleInfo',
      ),
    ),
    33450 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MDPrepDate',
        'title' => 'MD Prep Date',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MDPrepDate',
      ),
    ),
    33451 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MDPrepTime',
        'title' => 'MD Prep Time',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MDPrepTime',
      ),
    ),
    33452 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MDFileUnits',
        'title' => 'MD File Units',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MDFileUnits',
      ),
    ),
    33550 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PixelScale',
        'title' => 'Pixel Scale',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PixelScale',
      ),
    ),
    33589 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'AdventScale',
        'title' => 'Advent Scale',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:AdventScale',
      ),
    ),
    33590 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'AdventRevision',
        'title' => 'Advent Revision',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:AdventRevision',
      ),
    ),
    33628 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'UIC1Tag',
        'title' => 'UIC1 Tag',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:UIC1Tag',
      ),
    ),
    33629 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'UIC2Tag',
        'title' => 'UIC2 Tag',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:UIC2Tag',
      ),
    ),
    33630 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'UIC3Tag',
        'title' => 'UIC3 Tag',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:UIC3Tag',
      ),
    ),
    33631 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'UIC4Tag',
        'title' => 'UIC4 Tag',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:UIC4Tag',
      ),
    ),
    33918 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'IntergraphPacketData',
        'title' => 'Intergraph Packet Data',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:IntergraphPacketData',
      ),
    ),
    33919 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'IntergraphFlagRegisters',
        'title' => 'Intergraph Flag Registers',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:IntergraphFlagRegisters',
      ),
    ),
    33920 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'IntergraphMatrix',
        'title' => 'Intergraph Matrix',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:IntergraphMatrix',
      ),
    ),
    33921 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'INGRReserved',
        'title' => 'INGR Reserved',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:INGRReserved',
      ),
    ),
    33922 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ModelTiePoint',
        'title' => 'Model Tie Point',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ModelTiePoint',
      ),
    ),
    34016 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Site',
        'title' => 'Site',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Site',
      ),
    ),
    34017 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ColorSequence',
        'title' => 'Color Sequence',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ColorSequence',
      ),
    ),
    34018 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'IT8Header',
        'title' => 'IT8 Header',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:IT8Header',
      ),
    ),
    34019 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'RasterPadding',
        'title' => 'Raster Padding',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Byte',
            1 => 'Word',
            2 => 'Long Word',
            9 => 'Sector',
            10 => 'Long Sector',
          ),
        ),
        'phpExifTag' => 'IT8RasterPadding',
        'exiftoolDOMNode' => 'ExifIFD:RasterPadding',
      ),
    ),
    34020 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'BitsPerRunLength',
        'title' => 'Bits Per Run Length',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:BitsPerRunLength',
      ),
    ),
    34021 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'BitsPerExtendedRunLength',
        'title' => 'Bits Per Extended Run Length',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'IT8ColorTable',
        'exiftoolDOMNode' => 'ExifIFD:BitsPerExtendedRunLength',
      ),
    ),
    34022 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ColorTable',
        'title' => 'Color Table',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ColorTable',
      ),
    ),
    34023 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageColorIndicator',
        'title' => 'Image Color Indicator',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Unspecified Image Color',
            1 => 'Specified Image Color',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageColorIndicator',
      ),
    ),
    34024 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'BackgroundColorIndicator',
        'title' => 'Background Color Indicator',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Unspecified Background Color',
            1 => 'Specified Background Color',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:BackgroundColorIndicator',
      ),
    ),
    34025 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageColorValue',
        'title' => 'Image Color Value',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageColorValue',
      ),
    ),
    34026 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'BackgroundColorValue',
        'title' => 'Background Color Value',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:BackgroundColorValue',
      ),
    ),
    34027 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PixelIntensityRange',
        'title' => 'Pixel Intensity Range',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PixelIntensityRange',
      ),
    ),
    34028 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'TransparencyIndicator',
        'title' => 'Transparency Indicator',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:TransparencyIndicator',
      ),
    ),
    34029 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ColorCharacterization',
        'title' => 'Color Characterization',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ColorCharacterization',
      ),
    ),
    34030 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'HCUsage',
        'title' => 'HC Usage',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'CT',
            1 => 'Line Art',
            2 => 'Trap',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:HCUsage',
      ),
    ),
    34031 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'TrapIndicator',
        'title' => 'Trap Indicator',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:TrapIndicator',
      ),
    ),
    34032 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CMYKEquivalent',
        'title' => 'CMYK Equivalent',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:CMYKEquivalent',
      ),
    ),
    34232 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PixelMagicJBIGOptions',
        'title' => 'Pixel Magic JBIG Options',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:PixelMagicJBIGOptions',
      ),
    ),
    34263 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JPLCartoIFD',
        'title' => 'JPL Carto IFD',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:JPLCartoIFD',
      ),
    ),
    34264 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ModelTransform',
        'title' => 'Model Transform',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ModelTransform',
      ),
    ),
    34306 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'WB_GRGBLevels',
        'title' => 'WB GRGB Levels',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:WB_GRGBLevels',
      ),
    ),
    34687 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'TIFF_FXExtensions',
        'title' => 'TIFF FX Extensions',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            'Bit0' => 'Resolution/Image Width',
            'Bit1' => 'N Layer Profile M',
            'Bit2' => 'Shared Data',
            'Bit3' => 'B&W JBIG2',
            'Bit4' => 'JBIG2 Profile M',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:TIFF_FXExtensions',
      ),
    ),
    34688 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MultiProfiles',
        'title' => 'Multi Profiles',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            'Bit0' => 'Profile S',
            'Bit1' => 'Profile F',
            'Bit10' => 'JBIG2 Profile M',
            'Bit2' => 'Profile J',
            'Bit3' => 'Profile C',
            'Bit4' => 'Profile L',
            'Bit5' => 'Profile M',
            'Bit6' => 'Profile T',
            'Bit7' => 'Resolution/Image Width',
            'Bit8' => 'N Layer Profile M',
            'Bit9' => 'Shared Data',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:MultiProfiles',
      ),
    ),
    34689 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SharedData',
        'title' => 'Shared Data',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:SharedData',
      ),
    ),
    34690 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'T88Options',
        'title' => 'T88 Options',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:T88Options',
      ),
    ),
    34732 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageLayer',
        'title' => 'Image Layer',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageLayer',
      ),
    ),
    34750 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'JBIGOptions',
        'title' => 'JBIG Options',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:JBIGOptions',
      ),
    ),
    34850 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExposureProgram',
        'title' => 'Exposure Program',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Not Defined',
            1 => 'Manual',
            2 => 'Program AE',
            3 => 'Aperture-priority AE',
            4 => 'Shutter speed priority AE',
            5 => 'Creative (Slow speed)',
            6 => 'Action (High speed)',
            7 => 'Portrait',
            8 => 'Landscape',
            9 => 'Bulb',
          ),
        ),
        'phpExifTag' => 'ExposureProgram',
        'exiftoolDOMNode' => 'ExifIFD:ExposureProgram',
      ),
    ),
    34852 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SpectralSensitivity',
        'title' => 'Spectral Sensitivity',
        'format' =>
        array (
          0 => 2,
        ),
        'phpExifTag' => 'SpectralSensity',
        'exiftoolDOMNode' => 'ExifIFD:SpectralSensitivity',
      ),
    ),
    34855 =>
    array (
      0 =>
      array (
        'alias' =>
        array (
          0 => 'ISOSpeedRatings',
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ISO',
        'title' => 'ISO',
        'format' =>
        array (
          0 => 3,
        ),
        'phpExifTag' => 'ISOSpeedRatings',
        'exiftoolDOMNode' => 'ExifIFD:ISO',
      ),
    ),
    34856 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Opto-ElectricConvFactor',
        'title' => 'Opto-Electric Conv Factor',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'OECF',
        'exiftoolDOMNode' => 'ExifIFD:Opto-ElectricConvFactor',
      ),
    ),
    34857 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Interlace',
        'title' => 'Interlace',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Interlace',
      ),
    ),
    34858 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'TimeZoneOffset',
        'title' => 'Time Zone Offset',
        'format' =>
        array (
          0 => 8,
        ),
        'exiftoolDOMNode' => 'ExifIFD:TimeZoneOffset',
      ),
    ),
    34859 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SelfTimerMode',
        'title' => 'Self Timer Mode',
        'format' =>
        array (
          0 => 3,
        ),
        'exiftoolDOMNode' => 'ExifIFD:SelfTimerMode',
      ),
    ),
    34864 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SensitivityType',
        'title' => 'Sensitivity Type',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Unknown',
            1 => 'Standard Output Sensitivity',
            2 => 'Recommended Exposure Index',
            3 => 'ISO Speed',
            4 => 'Standard Output Sensitivity and Recommended Exposure Index',
            5 => 'Standard Output Sensitivity and ISO Speed',
            6 => 'Recommended Exposure Index and ISO Speed',
            7 => 'Standard Output Sensitivity, Recommended Exposure Index and ISO Speed',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:SensitivityType',
      ),
    ),
    34865 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'StandardOutputSensitivity',
        'title' => 'Standard Output Sensitivity',
        'format' =>
        array (
          0 => 4,
        ),
        'exiftoolDOMNode' => 'ExifIFD:StandardOutputSensitivity',
      ),
    ),
    34866 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'RecommendedExposureIndex',
        'title' => 'Recommended Exposure Index',
        'format' =>
        array (
          0 => 4,
        ),
        'exiftoolDOMNode' => 'ExifIFD:RecommendedExposureIndex',
      ),
    ),
    34867 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ISOSpeed',
        'title' => 'ISO Speed',
        'format' =>
        array (
          0 => 4,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ISOSpeed',
      ),
    ),
    34868 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ISOSpeedLatitudeyyy',
        'title' => 'ISO Speed Latitude yyy',
        'format' =>
        array (
          0 => 4,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ISOSpeedLatitudeyyy',
      ),
    ),
    34869 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ISOSpeedLatitudezzz',
        'title' => 'ISO Speed Latitude zzz',
        'format' =>
        array (
          0 => 4,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ISOSpeedLatitudezzz',
      ),
    ),
    34908 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FaxRecvParams',
        'title' => 'Fax Recv Params',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:FaxRecvParams',
      ),
    ),
    34909 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FaxSubAddress',
        'title' => 'Fax Sub Address',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:FaxSubAddress',
      ),
    ),
    34910 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FaxRecvTime',
        'title' => 'Fax Recv Time',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:FaxRecvTime',
      ),
    ),
    34929 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FedexEDR',
        'title' => 'Fedex EDR',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:FedexEDR',
      ),
    ),
    36864 =>
    array (
      0 =>
      array (
        'components' => 4,
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Version',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExifVersion',
        'title' => 'Exif Version',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'ExifVersion',
        'exiftoolDOMNode' => 'ExifIFD:ExifVersion',
      ),
    ),
    36867 =>
    array (
      0 =>
      array (
        'components' => 20,
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Time',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'DateTimeOriginal',
        'title' => 'Date/Time Original',
        'format' =>
        array (
          0 => 2,
        ),
        'phpExifTag' => 'DateTimeOriginal',
        'exiftoolDOMNode' => 'ExifIFD:DateTimeOriginal',
      ),
    ),
    36868 =>
    array (
      0 =>
      array (
        'components' => 20,
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Time',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CreateDate',
        'title' => 'Create Date',
        'format' =>
        array (
          0 => 2,
        ),
        'phpExifTag' => 'DateTimeDigitized',
        'exiftoolDOMNode' => 'ExifIFD:CreateDate',
      ),
    ),
    36873 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'GooglePlusUploadCode',
        'title' => 'Google Plus Upload Code',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:GooglePlusUploadCode',
      ),
    ),
    36880 =>
    array (
      0 =>
      array (
        'components' => 7,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OffsetTime',
        'title' => 'Offset Time',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:OffsetTime',
      ),
    ),
    36881 =>
    array (
      0 =>
      array (
        'components' => 7,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OffsetTimeOriginal',
        'title' => 'Offset Time Original',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:OffsetTimeOriginal',
      ),
    ),
    36882 =>
    array (
      0 =>
      array (
        'components' => 7,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OffsetTimeDigitized',
        'title' => 'Offset Time Digitized',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:OffsetTimeDigitized',
      ),
    ),
    37121 =>
    array (
      0 =>
      array (
        'components' => 4,
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifComponentsConfiguration',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ComponentsConfiguration',
        'title' => 'Components Configuration',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => '-',
            1 => 'Y',
            2 => 'Cb',
            3 => 'Cr',
            4 => 'R',
            5 => 'G',
            6 => 'B',
          ),
        ),
        'phpExifTag' => 'ComponentsConfiguration',
        'exiftoolDOMNode' => 'ExifIFD:ComponentsConfiguration',
      ),
    ),
    37122 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CompressedBitsPerPixel',
        'title' => 'Compressed Bits Per Pixel',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'CompressedBitsPerPixel',
        'exiftoolDOMNode' => 'ExifIFD:CompressedBitsPerPixel',
      ),
    ),
    37377 =>
    array (
      0 =>
      array (
        'components' => 1,
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifShutterSpeedValue',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ShutterSpeedValue',
        'title' => 'Shutter Speed Value',
        'format' =>
        array (
          0 => 10,
        ),
        'phpExifTag' => 'ShutterSpeedValue',
        'exiftoolDOMNode' => 'ExifIFD:ShutterSpeedValue',
      ),
    ),
    37378 =>
    array (
      0 =>
      array (
        'components' => 1,
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifApertureValue',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ApertureValue',
        'title' => 'Aperture Value',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'ApertureValue',
        'exiftoolDOMNode' => 'ExifIFD:ApertureValue',
      ),
    ),
    37379 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'BrightnessValue',
        'title' => 'Brightness Value',
        'format' =>
        array (
          0 => 10,
        ),
        'phpExifTag' => 'BrightnessValue',
        'exiftoolDOMNode' => 'ExifIFD:BrightnessValue',
      ),
    ),
    37380 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifExposureBiasValue',
        'alias' =>
        array (
          0 => 'ExposureBiasValue',
        ),
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExposureCompensation',
        'title' => 'Exposure Compensation',
        'format' =>
        array (
          0 => 10,
        ),
        'phpExifTag' => 'ExposureBiasValue',
        'exiftoolDOMNode' => 'ExifIFD:ExposureCompensation',
      ),
    ),
    37381 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifApertureValue',
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MaxApertureValue',
        'title' => 'Max Aperture Value',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'MaxApertureValue',
        'exiftoolDOMNode' => 'ExifIFD:MaxApertureValue',
      ),
    ),
    37382 =>
    array (
      0 =>
      array (
        'components' => 1,
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifSubjectDistance',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SubjectDistance',
        'title' => 'Subject Distance',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'SubjectDistance',
        'exiftoolDOMNode' => 'ExifIFD:SubjectDistance',
      ),
    ),
    37383 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MeteringMode',
        'title' => 'Metering Mode',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Unknown',
            1 => 'Average',
            2 => 'Center-weighted average',
            3 => 'Spot',
            4 => 'Multi-spot',
            5 => 'Multi-segment',
            6 => 'Partial',
            255 => 'Other',
          ),
        ),
        'phpExifTag' => 'MeteringMode',
        'exiftoolDOMNode' => 'ExifIFD:MeteringMode',
      ),
    ),
    37384 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'LightSource',
        'title' => 'Light Source',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Unknown',
            1 => 'Daylight',
            2 => 'Fluorescent',
            3 => 'Tungsten (Incandescent)',
            4 => 'Flash',
            9 => 'Fine Weather',
            10 => 'Cloudy',
            11 => 'Shade',
            12 => 'Daylight Fluorescent',
            13 => 'Day White Fluorescent',
            14 => 'Cool White Fluorescent',
            15 => 'White Fluorescent',
            16 => 'Warm White Fluorescent',
            17 => 'Standard Light A',
            18 => 'Standard Light B',
            19 => 'Standard Light C',
            20 => 'D55',
            21 => 'D65',
            22 => 'D75',
            23 => 'D50',
            24 => 'ISO Studio Tungsten',
            255 => 'Other',
          ),
        ),
        'phpExifTag' => 'LightSource',
        'exiftoolDOMNode' => 'ExifIFD:LightSource',
      ),
    ),
    37385 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Flash',
        'title' => 'Flash',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'No Flash',
            1 => 'Fired',
            5 => 'Fired, Return not detected',
            7 => 'Fired, Return detected',
            8 => 'On, Did not fire',
            9 => 'On, Fired',
            13 => 'On, Return not detected',
            15 => 'On, Return detected',
            16 => 'Off, Did not fire',
            20 => 'Off, Did not fire, Return not detected',
            24 => 'Auto, Did not fire',
            25 => 'Auto, Fired',
            29 => 'Auto, Fired, Return not detected',
            31 => 'Auto, Fired, Return detected',
            32 => 'No flash function',
            48 => 'Off, No flash function',
            65 => 'Fired, Red-eye reduction',
            69 => 'Fired, Red-eye reduction, Return not detected',
            71 => 'Fired, Red-eye reduction, Return detected',
            73 => 'On, Red-eye reduction',
            77 => 'On, Red-eye reduction, Return not detected',
            79 => 'On, Red-eye reduction, Return detected',
            80 => 'Off, Red-eye reduction',
            88 => 'Auto, Did not fire, Red-eye reduction',
            89 => 'Auto, Fired, Red-eye reduction',
            93 => 'Auto, Fired, Red-eye reduction, Return not detected',
            95 => 'Auto, Fired, Red-eye reduction, Return detected',
          ),
        ),
        'phpExifTag' => 'Flash',
        'exiftoolDOMNode' => 'ExifIFD:Flash',
      ),
    ),
    37386 =>
    array (
      0 =>
      array (
        'components' => 1,
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifFocalLength',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocalLength',
        'title' => 'Focal Length',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'FocalLength',
        'exiftoolDOMNode' => 'ExifIFD:FocalLength',
      ),
    ),
    37387 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FlashEnergy',
        'title' => 'Flash Energy',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'FlashEnergy',
        'exiftoolDOMNode' => 'ExifIFD:FlashEnergy',
      ),
    ),
    37388 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SpatialFrequencyResponse',
        'title' => 'Spatial Frequency Response',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'SpatialFrequencyResponse',
        'exiftoolDOMNode' => 'ExifIFD:SpatialFrequencyResponse',
      ),
    ),
    37389 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Noise',
        'title' => 'Noise',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'Noise',
        'exiftoolDOMNode' => 'ExifIFD:Noise',
      ),
    ),
    37390 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocalPlaneXResolution',
        'title' => 'Focal Plane X Resolution',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'FocalPlaneXResolution',
        'exiftoolDOMNode' => 'ExifIFD:FocalPlaneXResolution',
      ),
    ),
    37391 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocalPlaneYResolution',
        'title' => 'Focal Plane Y Resolution',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'FocalPlaneYResolution',
        'exiftoolDOMNode' => 'ExifIFD:FocalPlaneYResolution',
      ),
    ),
    37392 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocalPlaneResolutionUnit',
        'title' => 'Focal Plane Resolution Unit',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            1 => 'None',
            2 => 'inches',
            3 => 'cm',
            4 => 'mm',
            5 => 'um',
          ),
        ),
        'phpExifTag' => 'FocalPlaneResolutionUnit',
        'exiftoolDOMNode' => 'ExifIFD:FocalPlaneResolutionUnit',
      ),
    ),
    37393 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageNumber',
        'title' => 'Image Number',
        'format' =>
        array (
          0 => 4,
        ),
        'phpExifTag' => 'ImageNumber',
        'exiftoolDOMNode' => 'ExifIFD:ImageNumber',
      ),
    ),
    37394 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SecurityClassification',
        'title' => 'Security Classification',
        'format' =>
        array (
          0 => 2,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            'C' => 'Confidential',
            'R' => 'Restricted',
            'S' => 'Secret',
            'T' => 'Top Secret',
            'U' => 'Unclassified',
          ),
        ),
        'phpExifTag' => 'SecurityClassification',
        'exiftoolDOMNode' => 'ExifIFD:SecurityClassification',
      ),
    ),
    37395 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageHistory',
        'title' => 'Image History',
        'format' =>
        array (
          0 => 2,
        ),
        'phpExifTag' => 'ImageHistory',
        'exiftoolDOMNode' => 'ExifIFD:ImageHistory',
      ),
    ),
    37396 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifSubjectArea',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SubjectArea',
        'title' => 'Subject Area',
        'format' =>
        array (
          0 => 3,
        ),
        'phpExifTag' => 'SubjectLocation',
        'exiftoolDOMNode' => 'ExifIFD:SubjectArea',
      ),
    ),
    37397 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExposureIndex',
        'title' => 'Exposure Index',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'ExposureIndex',
        'exiftoolDOMNode' => 'ExifIFD:ExposureIndex',
      ),
    ),
    37398 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'TIFF-EPStandardID',
        'title' => 'TIFF-EP Standard ID',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'TIFF/EPStandardID',
        'exiftoolDOMNode' => 'ExifIFD:TIFF-EPStandardID',
      ),
    ),
    37399 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SensingMethod',
        'title' => 'Sensing Method',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            1 => 'Monochrome area',
            2 => 'One-chip color area',
            3 => 'Two-chip color area',
            4 => 'Three-chip color area',
            5 => 'Color sequential area',
            6 => 'Monochrome linear',
            7 => 'Trilinear',
            8 => 'Color sequential linear',
          ),
        ),
        'phpExifTag' => 'SensingMethod',
        'exiftoolDOMNode' => 'ExifIFD:SensingMethod',
      ),
    ),
    37434 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CIP3DataFile',
        'title' => 'CIP3 Data File',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:CIP3DataFile',
      ),
    ),
    37435 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CIP3Sheet',
        'title' => 'CIP3 Sheet',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:CIP3Sheet',
      ),
    ),
    37436 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CIP3Side',
        'title' => 'CIP3 Side',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:CIP3Side',
      ),
    ),
    37439 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'StoNits',
        'title' => 'Sto Nits',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'StoNits',
        'exiftoolDOMNode' => 'ExifIFD:StoNits',
      ),
    ),
    37500 =>
    array (
      0 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      1 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      2 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      3 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      4 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      5 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      6 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      7 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      8 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      9 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      10 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      11 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      12 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      13 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      14 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      15 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      16 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      17 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      18 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      19 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      20 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      21 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      22 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      23 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      24 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      25 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      26 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      27 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      28 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      29 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      30 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      31 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      32 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      33 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      34 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      35 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      36 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      37 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      38 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      39 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      40 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      41 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      42 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      43 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      44 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      45 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      46 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      47 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      48 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      49 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      50 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      51 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      52 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      53 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      54 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      55 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      56 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      57 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      58 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      59 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      60 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      61 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      62 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      63 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      64 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      65 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      66 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      67 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      68 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      69 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      70 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      71 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      72 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      73 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      74 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      75 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      76 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      77 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      78 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      79 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      80 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      81 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      82 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      83 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      84 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      85 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      86 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      87 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      88 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      89 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
      90 =>
      array (
        'name' => 'MakerNote',
        'title' => 'Maker Note',
        'format' =>
        array (
          0 => 7,
        ),
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifMakerNote',
        'collection' => 'Media\\Tiff\\Tag',
      ),
    ),
    37510 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifUserComment',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'UserComment',
        'title' => 'User Comment',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'UserComment',
        'exiftoolDOMNode' => 'ExifIFD:UserComment',
      ),
    ),
    37520 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SubSecTime',
        'title' => 'Sub Sec Time',
        'format' =>
        array (
          0 => 2,
        ),
        'phpExifTag' => 'SubSecTime',
        'exiftoolDOMNode' => 'ExifIFD:SubSecTime',
      ),
    ),
    37521 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SubSecTimeOriginal',
        'title' => 'Sub Sec Time Original',
        'format' =>
        array (
          0 => 2,
        ),
        'phpExifTag' => 'SubSecTimeOriginal',
        'exiftoolDOMNode' => 'ExifIFD:SubSecTimeOriginal',
      ),
    ),
    37522 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SubSecTimeDigitized',
        'title' => 'Sub Sec Time Digitized',
        'format' =>
        array (
          0 => 2,
        ),
        'phpExifTag' => 'SubSecTimeDigitized',
        'exiftoolDOMNode' => 'ExifIFD:SubSecTimeDigitized',
      ),
    ),
    37679 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MSDocumentText',
        'title' => 'MS Document Text',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MSDocumentText',
      ),
    ),
    37680 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MSPropertySetStorage',
        'title' => 'MS Property Set Storage',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MSPropertySetStorage',
      ),
    ),
    37681 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MSDocumentTextPosition',
        'title' => 'MS Document Text Position',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MSDocumentTextPosition',
      ),
    ),
    37888 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'AmbientTemperature',
        'title' => 'Ambient Temperature',
        'format' =>
        array (
          0 => 10,
        ),
        'exiftoolDOMNode' => 'ExifIFD:AmbientTemperature',
      ),
    ),
    37889 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Humidity',
        'title' => 'Humidity',
        'format' =>
        array (
          0 => 5,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Humidity',
      ),
    ),
    37890 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Pressure',
        'title' => 'Pressure',
        'format' =>
        array (
          0 => 5,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Pressure',
      ),
    ),
    37891 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'WaterDepth',
        'title' => 'Water Depth',
        'format' =>
        array (
          0 => 10,
        ),
        'exiftoolDOMNode' => 'ExifIFD:WaterDepth',
      ),
    ),
    37892 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Acceleration',
        'title' => 'Acceleration',
        'format' =>
        array (
          0 => 5,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Acceleration',
      ),
    ),
    37893 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CameraElevationAngle',
        'title' => 'Camera Elevation Angle',
        'format' =>
        array (
          0 => 10,
        ),
        'exiftoolDOMNode' => 'ExifIFD:CameraElevationAngle',
      ),
    ),
    39321 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'XiaomiSettings',
        'title' => 'Xiaomi Settings',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:XiaomiSettings',
      ),
    ),
    39424 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'XiaomiModel',
        'title' => 'Xiaomi Model',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:XiaomiModel',
      ),
    ),
    40960 =>
    array (
      0 =>
      array (
        'components' => 4,
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\Version',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FlashpixVersion',
        'title' => 'Flashpix Version',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'FlashPixVersion',
        'exiftoolDOMNode' => 'ExifIFD:FlashpixVersion',
      ),
    ),
    40961 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ColorSpace',
        'title' => 'Color Space',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            1 => 'sRGB',
            2 => 'Adobe RGB',
            65533 => 'Wide Gamut RGB',
            65534 => 'ICC Profile',
            65535 => 'Uncalibrated',
          ),
        ),
        'phpExifTag' => 'ColorSpace',
        'exiftoolDOMNode' => 'ExifIFD:ColorSpace',
      ),
    ),
    40962 =>
    array (
      0 =>
      array (
        'alias' =>
        array (
          0 => 'PixelXDimension',
        ),
        'components' => 1,
        'format' =>
        array (
          0 => 3,
          1 => 4,
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExifImageWidth',
        'title' => 'Exif Image Width',
        'phpExifTag' => 'ExifImageWidth',
        'exiftoolDOMNode' => 'ExifIFD:ExifImageWidth',
      ),
    ),
    40963 =>
    array (
      0 =>
      array (
        'alias' =>
        array (
          0 => 'PixelYDimension',
        ),
        'components' => 1,
        'format' =>
        array (
          0 => 3,
          1 => 4,
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExifImageHeight',
        'title' => 'Exif Image Height',
        'phpExifTag' => 'ExifImageLength',
        'exiftoolDOMNode' => 'ExifIFD:ExifImageHeight',
      ),
    ),
    40964 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'RelatedSoundFile',
        'title' => 'Related Sound File',
        'format' =>
        array (
          0 => 2,
        ),
        'phpExifTag' => 'RelatedSoundFile',
        'exiftoolDOMNode' => 'ExifIFD:RelatedSoundFile',
      ),
    ),
    40965 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\IfdInteroperability',
      ),
    ),
    40976 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SamsungRawPointersOffset',
        'title' => 'Samsung Raw Pointers Offset',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:SamsungRawPointersOffset',
      ),
    ),
    40977 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SamsungRawPointersLength',
        'title' => 'Samsung Raw Pointers Length',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:SamsungRawPointersLength',
      ),
    ),
    41217 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SamsungRawByteOrder',
        'title' => 'Samsung Raw Byte Order',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:SamsungRawByteOrder',
      ),
    ),
    41218 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SamsungRawUnknown',
        'title' => 'Samsung Raw Unknown',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:SamsungRawUnknown',
      ),
    ),
    41483 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FlashEnergy',
        'title' => 'Flash Energy',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'FlashEnergy',
        'exiftoolDOMNode' => 'ExifIFD:FlashEnergy',
      ),
    ),
    41484 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SpatialFrequencyResponse',
        'title' => 'Spatial Frequency Response',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'SpatialFrequencyResponse',
        'exiftoolDOMNode' => 'ExifIFD:SpatialFrequencyResponse',
      ),
    ),
    41485 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Noise',
        'title' => 'Noise',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'Noise',
        'exiftoolDOMNode' => 'ExifIFD:Noise',
      ),
    ),
    41486 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocalPlaneXResolution',
        'title' => 'Focal Plane X Resolution',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'FocalPlaneXResolution',
        'exiftoolDOMNode' => 'ExifIFD:FocalPlaneXResolution',
      ),
    ),
    41487 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocalPlaneYResolution',
        'title' => 'Focal Plane Y Resolution',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'FocalPlaneYResolution',
        'exiftoolDOMNode' => 'ExifIFD:FocalPlaneYResolution',
      ),
    ),
    41488 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocalPlaneResolutionUnit',
        'title' => 'Focal Plane Resolution Unit',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            1 => 'None',
            2 => 'inches',
            3 => 'cm',
            4 => 'mm',
            5 => 'um',
          ),
        ),
        'phpExifTag' => 'FocalPlaneResolutionUnit',
        'exiftoolDOMNode' => 'ExifIFD:FocalPlaneResolutionUnit',
      ),
    ),
    41489 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageNumber',
        'title' => 'Image Number',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'ImageNumber',
        'exiftoolDOMNode' => 'ExifIFD:ImageNumber',
      ),
    ),
    41490 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SecurityClassification',
        'title' => 'Security Classification',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'SecurityClassification',
        'exiftoolDOMNode' => 'ExifIFD:SecurityClassification',
      ),
    ),
    41491 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageHistory',
        'title' => 'Image History',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'ImageHistory',
        'exiftoolDOMNode' => 'ExifIFD:ImageHistory',
      ),
    ),
    41492 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SubjectLocation',
        'title' => 'Subject Location',
        'format' =>
        array (
          0 => 3,
        ),
        'phpExifTag' => 'SubjectLocation',
        'exiftoolDOMNode' => 'ExifIFD:SubjectLocation',
      ),
    ),
    41493 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExposureIndex',
        'title' => 'Exposure Index',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'ExposureIndex',
        'exiftoolDOMNode' => 'ExifIFD:ExposureIndex',
      ),
    ),
    41494 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'TIFF-EPStandardID',
        'title' => 'TIFF-EP Standard ID',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'TIFF/EPStandardID',
        'exiftoolDOMNode' => 'ExifIFD:TIFF-EPStandardID',
      ),
    ),
    41495 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SensingMethod',
        'title' => 'Sensing Method',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            1 => 'Not defined',
            2 => 'One-chip color area',
            3 => 'Two-chip color area',
            4 => 'Three-chip color area',
            5 => 'Color sequential area',
            7 => 'Trilinear',
            8 => 'Color sequential linear',
          ),
        ),
        'phpExifTag' => 'SensingMethod',
        'exiftoolDOMNode' => 'ExifIFD:SensingMethod',
      ),
    ),
    41728 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FileSource',
        'title' => 'File Source',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            1 => 'Film Scanner',
            2 => 'Reflection Print Scanner',
            3 => 'Digital Camera',
            '\\x03\\x00\\x00\\x00' => 'Sigma Digital Camera',
          ),
        ),
        'phpExifTag' => 'FileSource',
        'exiftoolDOMNode' => 'ExifIFD:FileSource',
      ),
    ),
    41729 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SceneType',
        'title' => 'Scene Type',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            1 => 'Directly photographed',
          ),
        ),
        'phpExifTag' => 'SceneType',
        'exiftoolDOMNode' => 'ExifIFD:SceneType',
      ),
    ),
    41730 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifCFAPattern',
        'text' =>
        array (
          'mapping' =>
          array (
            '0 1 1 2' => '[Red,Green][Green,Blue]',
            '1 0 2 1' => '[Green,Red][Blue,Green]',
            '1 2 0 1' => '[Green,Blue][Red,Green]',
            '2 1 1 0' => '[Blue,Green][Green,Red]',
          ),
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CFAPattern',
        'title' => 'CFA Pattern',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'CFAPattern',
        'exiftoolDOMNode' => 'ExifIFD:CFAPattern',
      ),
    ),
    41985 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CustomRendered',
        'title' => 'Custom Rendered',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Normal',
            1 => 'Custom',
            2 => 'HDR (no original saved)',
            3 => 'HDR (original saved)',
            4 => 'Original (for HDR)',
            6 => 'Panorama',
            7 => 'Portrait HDR',
            8 => 'Portrait',
          ),
        ),
        'phpExifTag' => 'CustomRendered',
        'exiftoolDOMNode' => 'ExifIFD:CustomRendered',
      ),
    ),
    41986 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExposureMode',
        'title' => 'Exposure Mode',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Auto',
            1 => 'Manual',
            2 => 'Auto bracket',
          ),
        ),
        'phpExifTag' => 'ExposureMode',
        'exiftoolDOMNode' => 'ExifIFD:ExposureMode',
      ),
    ),
    41987 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'WhiteBalance',
        'title' => 'White Balance',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Auto',
            1 => 'Manual',
          ),
        ),
        'phpExifTag' => 'WhiteBalance',
        'exiftoolDOMNode' => 'ExifIFD:WhiteBalance',
      ),
    ),
    41988 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'DigitalZoomRatio',
        'title' => 'Digital Zoom Ratio',
        'format' =>
        array (
          0 => 5,
        ),
        'phpExifTag' => 'DigitalZoomRatio',
        'exiftoolDOMNode' => 'ExifIFD:DigitalZoomRatio',
      ),
    ),
    41989 =>
    array (
      0 =>
      array (
        'alias' =>
        array (
          0 => 'FocalLengthIn35mmFilm',
        ),
        'components' => 1,
        'text' =>
        array (
          'default' => '{value} mm',
        ),
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'FocalLengthIn35mmFormat',
        'title' => 'Focal Length In 35mm Format',
        'format' =>
        array (
          0 => 3,
        ),
        'phpExifTag' => 'FocalLengthIn35mmFilm',
        'exiftoolDOMNode' => 'ExifIFD:FocalLengthIn35mmFormat',
      ),
    ),
    41990 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SceneCaptureType',
        'title' => 'Scene Capture Type',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Standard',
            1 => 'Landscape',
            2 => 'Portrait',
            3 => 'Night',
            4 => 'Other',
          ),
        ),
        'phpExifTag' => 'SceneCaptureType',
        'exiftoolDOMNode' => 'ExifIFD:SceneCaptureType',
      ),
    ),
    41991 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'GainControl',
        'title' => 'Gain Control',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'None',
            1 => 'Low gain up',
            2 => 'High gain up',
            3 => 'Low gain down',
            4 => 'High gain down',
          ),
        ),
        'phpExifTag' => 'GainControl',
        'exiftoolDOMNode' => 'ExifIFD:GainControl',
      ),
    ),
    41992 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Contrast',
        'title' => 'Contrast',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Normal',
            1 => 'Low',
            2 => 'High',
          ),
        ),
        'phpExifTag' => 'Contrast',
        'exiftoolDOMNode' => 'ExifIFD:Contrast',
      ),
    ),
    41993 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Saturation',
        'title' => 'Saturation',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Normal',
            1 => 'Low',
            2 => 'High',
          ),
        ),
        'phpExifTag' => 'Saturation',
        'exiftoolDOMNode' => 'ExifIFD:Saturation',
      ),
    ),
    41994 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Sharpness',
        'title' => 'Sharpness',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Normal',
            1 => 'Soft',
            2 => 'Hard',
          ),
        ),
        'phpExifTag' => 'Sharpness',
        'exiftoolDOMNode' => 'ExifIFD:Sharpness',
      ),
    ),
    41995 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'DeviceSettingDescription',
        'title' => 'Device Setting Description',
        'format' =>
        array (
          0 => 7,
        ),
        'phpExifTag' => 'DeviceSettingDescription',
        'exiftoolDOMNode' => 'ExifIFD:DeviceSettingDescription',
      ),
    ),
    41996 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SubjectDistanceRange',
        'title' => 'Subject Distance Range',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Unknown',
            1 => 'Macro',
            2 => 'Close',
            3 => 'Distant',
          ),
        ),
        'phpExifTag' => 'SubjectDistanceRange',
        'exiftoolDOMNode' => 'ExifIFD:SubjectDistanceRange',
      ),
    ),
    42016 =>
    array (
      0 =>
      array (
        'components' => 32,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageUniqueID',
        'title' => 'Image Unique ID',
        'format' =>
        array (
          0 => 2,
        ),
        'phpExifTag' => 'ImageUniqueID',
        'exiftoolDOMNode' => 'ExifIFD:ImageUniqueID',
      ),
    ),
    42032 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OwnerName',
        'title' => 'Owner Name',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:OwnerName',
      ),
    ),
    42033 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SerialNumber',
        'title' => 'Serial Number',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:SerialNumber',
      ),
    ),
    42034 =>
    array (
      0 =>
      array (
        'entryClass' => 'FileEye\\MediaProbe\\Entry\\ExifLensInfo',
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'LensInfo',
        'title' => 'Lens Info',
        'components' => 4,
        'format' =>
        array (
          0 => 5,
        ),
        'exiftoolDOMNode' => 'ExifIFD:LensInfo',
      ),
    ),
    42035 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'LensMake',
        'title' => 'Lens Make',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:LensMake',
      ),
    ),
    42036 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'LensModel',
        'title' => 'Lens Model',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:LensModel',
      ),
    ),
    42037 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'LensSerialNumber',
        'title' => 'Lens Serial Number',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:LensSerialNumber',
      ),
    ),
    42038 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageTitle',
        'title' => 'Image Title',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageTitle',
      ),
    ),
    42039 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Photographer',
        'title' => 'Photographer',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Photographer',
      ),
    ),
    42040 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageEditor',
        'title' => 'Image Editor',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageEditor',
      ),
    ),
    42041 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CameraFirmware',
        'title' => 'Camera Firmware',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:CameraFirmware',
      ),
    ),
    42042 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'RAWDevelopingSoftware',
        'title' => 'RAW Developing Software',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:RAWDevelopingSoftware',
      ),
    ),
    42043 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageEditingSoftware',
        'title' => 'Image Editing Software',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageEditingSoftware',
      ),
    ),
    42044 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MetadataEditingSoftware',
        'title' => 'Metadata Editing Software',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MetadataEditingSoftware',
      ),
    ),
    42080 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CompositeImage',
        'title' => 'Composite Image',
        'format' =>
        array (
          0 => 3,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Unknown',
            1 => 'Not a Composite Image',
            2 => 'General Composite Image',
            3 => 'Composite Image Captured While Shooting',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:CompositeImage',
      ),
    ),
    42081 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CompositeImageCount',
        'title' => 'Composite Image Count',
        'components' => 2,
        'format' =>
        array (
          0 => 3,
        ),
        'exiftoolDOMNode' => 'ExifIFD:CompositeImageCount',
      ),
    ),
    42082 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CompositeImageExposureTimes',
        'title' => 'Composite Image Exposure Times',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:CompositeImageExposureTimes',
      ),
    ),
    42112 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'GDALMetadata',
        'title' => 'GDAL Metadata',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:GDALMetadata',
      ),
    ),
    42113 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'GDALNoData',
        'title' => 'GDAL No Data',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:GDALNoData',
      ),
    ),
    42240 =>
    array (
      0 =>
      array (
        'components' => 1,
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Gamma',
        'title' => 'Gamma',
        'format' =>
        array (
          0 => 5,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Gamma',
      ),
    ),
    44992 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExpandSoftware',
        'title' => 'Expand Software',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ExpandSoftware',
      ),
    ),
    44993 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExpandLens',
        'title' => 'Expand Lens',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ExpandLens',
      ),
    ),
    44994 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExpandFilm',
        'title' => 'Expand Film',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ExpandFilm',
      ),
    ),
    44995 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExpandFilterLens',
        'title' => 'Expand Filter Lens',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ExpandFilterLens',
      ),
    ),
    44996 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExpandScanner',
        'title' => 'Expand Scanner',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ExpandScanner',
      ),
    ),
    44997 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ExpandFlashLamp',
        'title' => 'Expand Flash Lamp',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ExpandFlashLamp',
      ),
    ),
    46275 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'HasselbladRawImage',
        'title' => 'Hasselblad Raw Image',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:HasselbladRawImage',
      ),
    ),
    48129 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'PixelFormat',
        'title' => 'Pixel Format',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            5 => 'Black & White',
            8 => '8-bit Gray',
            9 => '16-bit BGR555',
            10 => '16-bit BGR565',
            11 => '16-bit Gray',
            12 => '24-bit BGR',
            13 => '24-bit RGB',
            14 => '32-bit BGR',
            15 => '32-bit BGRA',
            16 => '32-bit PBGRA',
            17 => '32-bit Gray Float',
            18 => '48-bit RGB Fixed Point',
            19 => '32-bit BGR101010',
            21 => '48-bit RGB',
            22 => '64-bit RGBA',
            23 => '64-bit PRGBA',
            24 => '96-bit RGB Fixed Point',
            25 => '128-bit RGBA Float',
            26 => '128-bit PRGBA Float',
            27 => '128-bit RGB Float',
            28 => '32-bit CMYK',
            29 => '64-bit RGBA Fixed Point',
            30 => '128-bit RGBA Fixed Point',
            31 => '64-bit CMYK',
            32 => '24-bit 3 Channels',
            33 => '32-bit 4 Channels',
            34 => '40-bit 5 Channels',
            35 => '48-bit 6 Channels',
            36 => '56-bit 7 Channels',
            37 => '64-bit 8 Channels',
            38 => '48-bit 3 Channels',
            39 => '64-bit 4 Channels',
            40 => '80-bit 5 Channels',
            41 => '96-bit 6 Channels',
            42 => '112-bit 7 Channels',
            43 => '128-bit 8 Channels',
            44 => '40-bit CMYK Alpha',
            45 => '80-bit CMYK Alpha',
            46 => '32-bit 3 Channels Alpha',
            47 => '40-bit 4 Channels Alpha',
            48 => '48-bit 5 Channels Alpha',
            49 => '56-bit 6 Channels Alpha',
            50 => '64-bit 7 Channels Alpha',
            51 => '72-bit 8 Channels Alpha',
            52 => '64-bit 3 Channels Alpha',
            53 => '80-bit 4 Channels Alpha',
            54 => '96-bit 5 Channels Alpha',
            55 => '112-bit 6 Channels Alpha',
            56 => '128-bit 7 Channels Alpha',
            57 => '144-bit 8 Channels Alpha',
            58 => '64-bit RGBA Half',
            59 => '48-bit RGB Half',
            61 => '32-bit RGBE',
            62 => '16-bit Gray Half',
            63 => '32-bit Gray Fixed Point',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:PixelFormat',
      ),
    ),
    48130 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Transformation',
        'title' => 'Transformation',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Horizontal (normal)',
            1 => 'Mirror vertical',
            2 => 'Mirror horizontal',
            3 => 'Rotate 180',
            4 => 'Rotate 90 CW',
            5 => 'Mirror horizontal and rotate 90 CW',
            6 => 'Mirror horizontal and rotate 270 CW',
            7 => 'Rotate 270 CW',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:Transformation',
      ),
    ),
    48131 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Uncompressed',
        'title' => 'Uncompressed',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'No',
            1 => 'Yes',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:Uncompressed',
      ),
    ),
    48132 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageType',
        'title' => 'Image Type',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            'Bit0' => 'Preview',
            'Bit1' => 'Page',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageType',
      ),
    ),
    48256 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageWidth',
        'title' => 'Image Width',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageWidth',
      ),
    ),
    48257 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageHeight',
        'title' => 'Image Height',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageHeight',
      ),
    ),
    48258 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'WidthResolution',
        'title' => 'Width Resolution',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:WidthResolution',
      ),
    ),
    48259 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'HeightResolution',
        'title' => 'Height Resolution',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:HeightResolution',
      ),
    ),
    48320 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageOffset',
        'title' => 'Image Offset',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageOffset',
      ),
    ),
    48321 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageByteCount',
        'title' => 'Image Byte Count',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageByteCount',
      ),
    ),
    48322 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'AlphaOffset',
        'title' => 'Alpha Offset',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:AlphaOffset',
      ),
    ),
    48323 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'AlphaByteCount',
        'title' => 'Alpha Byte Count',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:AlphaByteCount',
      ),
    ),
    48324 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'ImageDataDiscard',
        'title' => 'Image Data Discard',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Full Resolution',
            1 => 'Flexbits Discarded',
            2 => 'HighPass Frequency Data Discarded',
            3 => 'Highpass and LowPass Frequency Data Discarded',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:ImageDataDiscard',
      ),
    ),
    48325 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'AlphaDataDiscard',
        'title' => 'Alpha Data Discard',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Full Resolution',
            1 => 'Flexbits Discarded',
            2 => 'HighPass Frequency Data Discarded',
            3 => 'Highpass and LowPass Frequency Data Discarded',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:AlphaDataDiscard',
      ),
    ),
    50215 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OceScanjobDesc',
        'title' => 'Oce Scanjob Desc',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:OceScanjobDesc',
      ),
    ),
    50216 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OceApplicationSelector',
        'title' => 'Oce Application Selector',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:OceApplicationSelector',
      ),
    ),
    50217 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OceIDNumber',
        'title' => 'Oce ID Number',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:OceIDNumber',
      ),
    ),
    50218 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OceImageLogic',
        'title' => 'Oce Image Logic',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:OceImageLogic',
      ),
    ),
    50255 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Annotations',
        'title' => 'Annotations',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Annotations',
      ),
    ),
    50547 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OriginalFileName',
        'title' => 'Original File Name',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:OriginalFileName',
      ),
    ),
    50560 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'USPTOOriginalContentType',
        'title' => 'USPTO Original Content Type',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            0 => 'Text or Drawing',
            1 => 'Grayscale',
            2 => 'Color',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:USPTOOriginalContentType',
      ),
    ),
    50656 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'CR2CFAPattern',
        'title' => 'CR2 CFA Pattern',
        'format' =>
        array (
          0 => 7,
        ),
        'text' =>
        array (
          'mapping' =>
          array (
            '0 1 1 2' => '[Red,Green][Green,Blue]',
            '1 0 2 1' => '[Green,Red][Blue,Green]',
            '1 2 0 1' => '[Green,Blue][Red,Green]',
            '2 1 1 0' => '[Blue,Green][Green,Red]',
          ),
        ),
        'exiftoolDOMNode' => 'ExifIFD:CR2CFAPattern',
      ),
    ),
    50752 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'RawImageSegmentation',
        'title' => 'Raw Image Segmentation',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:RawImageSegmentation',
      ),
    ),
    50784 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'AliasLayerMetadata',
        'title' => 'Alias Layer Metadata',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:AliasLayerMetadata',
      ),
    ),
    50974 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SubTileBlockSize',
        'title' => 'Sub Tile Block Size',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:SubTileBlockSize',
      ),
    ),
    50975 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'RowInterleaveFactor',
        'title' => 'Row Interleave Factor',
        'format' =>
        array (
          0 => 7,
        ),
        'exiftoolDOMNode' => 'ExifIFD:RowInterleaveFactor',
      ),
    ),
    59932 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Padding',
        'title' => 'Padding',
        'format' =>
        array (
          0 => 7,
        ),
      ),
    ),
    59933 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OffsetSchema',
        'title' => 'Offset Schema',
        'format' =>
        array (
          0 => 9,
        ),
        'exiftoolDOMNode' => 'ExifIFD:OffsetSchema',
      ),
    ),
    65000 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'OwnerName',
        'title' => 'Owner Name',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:OwnerName',
      ),
    ),
    65001 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'SerialNumber',
        'title' => 'Serial Number',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:SerialNumber',
      ),
    ),
    65002 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Lens',
        'title' => 'Lens',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Lens',
      ),
    ),
    65100 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'RawFile',
        'title' => 'Raw File',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:RawFile',
      ),
    ),
    65101 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Converter',
        'title' => 'Converter',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Converter',
      ),
    ),
    65102 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'WhiteBalance',
        'title' => 'White Balance',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:WhiteBalance',
      ),
    ),
    65105 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Exposure',
        'title' => 'Exposure',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Exposure',
      ),
    ),
    65106 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Shadows',
        'title' => 'Shadows',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Shadows',
      ),
    ),
    65107 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Brightness',
        'title' => 'Brightness',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Brightness',
      ),
    ),
    65108 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Contrast',
        'title' => 'Contrast',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Contrast',
      ),
    ),
    65109 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Saturation',
        'title' => 'Saturation',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Saturation',
      ),
    ),
    65110 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Sharpness',
        'title' => 'Sharpness',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Sharpness',
      ),
    ),
    65111 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'Smoothness',
        'title' => 'Smoothness',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:Smoothness',
      ),
    ),
    65112 =>
    array (
      0 =>
      array (
        'collection' => 'Media\\Tiff\\Tag',
        'name' => 'MoireFilter',
        'title' => 'Moire Filter',
        'format' =>
        array (
          0 => 2,
        ),
        'exiftoolDOMNode' => 'ExifIFD:MoireFilter',
      ),
    ),
  ),
);
}
