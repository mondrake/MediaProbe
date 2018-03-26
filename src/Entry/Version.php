<?php

namespace ExifEye\core\Entry;

use ExifEye\core\DataWindow;
use ExifEye\core\Entry\Exception\UnexpectedFormatException;
use ExifEye\core\ExifEye;
use ExifEye\core\Format;

/**
 * Class to hold version information.
 *
 * There are three Exif entries that hold version information: the
 * {@link PelTag::EXIF_VERSION}, {@link
 * PelTag::FLASH_PIX_VERSION}, and {@link
 * PelTag::INTEROPERABILITY_VERSION} tags. This class manages
 * those tags.
 *
 * The class is used in a very straight-forward way:
 * <code>
 * $entry = new Version(PelTag::EXIF_VERSION, 2.2);
 * </code>
 * This creates an entry for an file complying to the Exif 2.2
 * standard. It is easy to test for standards level of an unknown
 * entry:
 * <code>
 * if ($entry->getTag() == PelTag::EXIF_VERSION &&
 * $entry->getValue() > 2.0) {
 * echo 'Recent Exif version.';
 * }
 * </code>
 *
 * @author Martin Geisler <mgeisler@users.sourceforge.net>
 */
class Version extends EntryBase
{

    /**
     * The version held by this entry.
     *
     * @var float
     */
    private $version;

    /**
     * The value held by this entry.
     *
     * @var array
     */
    protected $value = [];

    /**
     * Make a new entry for holding a version.
     *
     * @param integer $tag
     *            This should be one of {@link
     *            PelTag::EXIF_VERSION}, {@link PelTag::FLASH_PIX_VERSION},
     *            or {@link PelTag::INTEROPERABILITY_VERSION}.
     *
     * @param float $version
     *            The size of the entries leave room for
     *            exactly four digits: two digits on either side of the decimal
     *            point.
     */
    public function __construct($tag, $version = 0.0)
    {
        $this->tag = $tag;
        $this->format = Format::UNDEFINED;
        $this->setValue($version);
    }

    /**
     * Get arguments for the instance constructor from file data.
     *
     * @param int $ifd_id
     *            the IFD id.
     * @param int $tag_id
     *            the TAG id.
     * @param int $format
     *            the format of the entry as defined in {@link Format}.
     * @param int $components
     *            the components in the entry.
     * @param DataWindow $data
     *            the data which will be used to construct the entry.
     * @param int $data_offset
     *            the offset of the main DataWindow where data is stored.
     *
     * @return array a list or arguments to be passed to the EntryBase subclass
     *            constructor.
     */
    public static function getInstanceArgumentsFromData($ifd_id, $tag_id, $format, $components, DataWindow $data, $data_offset)
    {
        if ($format != Format::UNDEFINED) {
            throw new UnexpectedFormatException($ifd_id, $tag_id, $format, Format::UNDEFINED);
        }
        return [$data->getBytes() / 100];
    }

    /**
     * Set the version held by this entry.
     *
     * @param float $version
     *            The size of the entries leave room for
     *            exactly four digits: two digits on either side of the decimal
     *            point.
     */
    public function setValue($version = 0.0)
    {
        $this->version = $version;
        $this->value[0] = $version;
        $major = floor($version);
        $minor = ($version - $major) * 100;
        $strValue = sprintf('%02.0f%02.0f', $major, $minor);
        $this->components = strlen($strValue);
        $this->bytes = $strValue;
    }

    /**
     * Return the version held by this entry.
     *
     * @return float This will be the same as the value
     *         given to {@link setValue} or {@link __construct the
     *         constructor}.
     */
    public function getValue()
    {
        return $this->version;
    }

    /**
     * Validates a version string.
     *
     * @param string $value
     *            the string version.
     *
     * @return string
     *            the validated string version.
     */
    private static function validateVersion($value)
    {
        return floor($value) == $value ? $value .= '.0' : $value;
    }

    /**
     * Decode text for an Exif/ExifVersion tag.
     *
     * @param EntryBase $entry
     *            the TAG EntryBase object.
     * @param bool $brief
     *            (Optional) indicates to use brief output.
     *
     * @return string
     *            the TAG text.
     */
    public static function decodeExifVersion(EntryBase $entry, $brief = false)
    {
        $version = static::validateVersion($entry->getValue());
        if ($brief) {
            return ExifEye::fmt('Exif %s', $version);
        } else {
            return ExifEye::fmt('Exif Version %s', $version);
        }
    }

    /**
     * Decode text for an Exif/FlashPixVersion tag.
     *
     * @param EntryBase $entry
     *            the TAG EntryBase object.
     * @param bool $brief
     *            (Optional) indicates to use brief output.
     *
     * @return string
     *            the TAG text.
     */
    public static function decodeFlashPixVersion(EntryBase $entry, $brief = false)
    {
        $version = static::validateVersion($entry->getValue());
        if ($brief) {
            return ExifEye::fmt('FlashPix %s', $version);
        } else {
            return ExifEye::fmt('FlashPix Version %s', $version);
        }
    }

    /**
     * Decode text for an Interoperability/InteroperabilityVersion tag.
     *
     * @param EntryBase $entry
     *            the TAG EntryBase object.
     * @param bool $brief
     *            (Optional) indicates to use brief output.
     *
     * @return string
     *            the TAG text.
     */
    public static function decodeInteroperabilityVersion(EntryBase $entry, $brief = false)
    {
        $version = static::validateVersion($entry->getValue());
        if ($brief) {
            return ExifEye::fmt('Interoperability %s', $version);
        } else {
            return ExifEye::fmt('Interoperability Version %s', $version);
        }
    }

    /**
     * Return a text string with the version.
     *
     * @param boolean $brief
     *            controls if the output should be brief. Brief
     *            output omits the word 'Version' so the result is just 'Exif x.y'
     *            instead of 'Exif Version x.y' if the entry holds information
     *            about the Exif version --- the output for FlashPix is similar.
     *
     * @return string the version number with the type of the tag,
     *         either 'Exif' or 'FlashPix'.
     */
    public function getText($brief = false)
    {
        // If Spec can return the text, return it.
        if (($tag_text = parent::getText($brief)) !== null) {
            return $tag_text;
        }

        $version = static::validateVersion($this->value[0]);
        if ($brief) {
            return $version;
        } else {
            return ExifEye::fmt('Version %s', $version);
        }
    }
}