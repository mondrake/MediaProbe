<?php

namespace FileEye\MediaProbe\Entry;

use FileEye\MediaProbe\Entry\Core\Ascii;

/**
 * Class for holding copyright information.
 *
 * The Exif standard specifies a certain format for copyright information
 * where the COPYRIGHT tag holds both the photographer and editor copyrights,
 * separated by a NUL character.
 */
class IfdCopyright extends Ascii
{
    public function getValue(array $options = []): mixed
    {
        $format = $options['format'] ?? null;
        switch ($format) {
            case 'exiftool':
                return rtrim($this->toString(['short' => true]), ' ');
            case 'phpExif':
                $ret = rtrim($this->toBytes(), "\x00");
                return $ret === '' ? null : $ret;
            default:
                $ret = explode("\0", rtrim($this->toBytes(), "\x00"));
                return [$ret[0] ?? '', $ret[1] ?? ''];
        }
    }

    /**
     * Return a text string with the copyright information.
     *
     * The photographer and editor copyright fields will be returned with a '-' in between if both
     * copyright fields are present, otherwise only one of them will be returned.
     *
     * @param array $options
     *   If the 'short' key is false, then the strings '(Photographer)' and '(Editor)' will be
     *   appended to the photographer and editor copyright fields (if present), otherwise the
     *   fields will be returned as is.
     *
     * @return string the copyright information in a string.
     */
    public function toString(array $options = []): string
    {
        $short = $options['short'] ?? false || ($options['format'] ?? null) === 'exiftool';

        if ($short) {
            $p = '';
            $e = '';
        } else {
            $p = ' ' . '(Photographer)';
            $e = ' ' . '(Editor)';
        }

        $value = $this->getValue();

        if ($value[0] !== '' && $value[1] !== '') {
            return $value[0] . $p . ' - ' . $value[1] . $e;
        } elseif ($value[0] != '') {
            return $value[0] . $p;
        } elseif ($value[1] != '') {
            return $value[1] . $e;
        }

        return '';
    }
}
