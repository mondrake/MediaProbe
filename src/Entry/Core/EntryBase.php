<?php

namespace ExifEye\core\Entry\Core;

use ExifEye\core\DataWindow;
use ExifEye\core\ExifEye;
use ExifEye\core\ExifEyeException;
use ExifEye\core\Format;
use ExifEye\core\Spec;
use ExifEye\core\Utility\Convert;

/**
 * Base class for EntryInterface objects.
 *
 * As this class is abstract you cannot instantiate objects from it. It only
 * serves as a common ancestor to define the methods common to all entries. The
 * most important methods are ::getValue() and ::setValue(), both of which are
 * abstract in this class. The descendants give concrete implementations for
 * them.
 *
 * If you have data coming from an image (some raw bytes), then the static
 * method ::getInstanceArgumentsFromTagData is helpful --- it looks at the data
 * and gives back an array of arguments that can be used in the descendent
 * constructor.
 */
abstract class EntryBase
{
    /**
     * The value held by this entry.
     *
     * A representation of the value of the entry which is more suitable for
     * handling than the bytes.
     *
     * @var array
     */
    protected $value = [];

    /**
     * The format of this entry.
     *
     * @var int
     */
    protected $format;

    /**
     * The number of components of this entry.
     *
     * @var int
     */
    protected $components;

    /**
     * Constructs an EntryInterface object.
     *
     * @param array $data
     *            the data that this entry will be holding.
     */
    public function __construct(array $data)
    {
        $this->setValue($data);
    }

    /**
     * Get arguments for the instance constructor from raw TAG data.
     *
     * @param int $format
     *            the format of the entry.
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
    public static function getInstanceArgumentsFromTagData($format, $components, DataWindow $data_window, $data_offset)
    {
        throw new ExifEyeException('getInstanceArgumentsFromTagData() must be implemented.');
    }

    /**
     * Returns the format of this entry.
     *
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Returns the number of components of this entry.
     *
     * @return int
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Returns the bytes representing this entry.
     *
     * @param bool $byte_order
     *            the byte order to use for numeric values, which must be either
     *            Convert::LITTLE_ENDIAN or Convert::BIG_ENDIAN.
     *
     * @return string
     */
    abstract public function getBytes($byte_order = Convert::LITTLE_ENDIAN);

    /**
     * Returns the value of this entry.
     *
     * The value returned will generally be the same as the one supplied to the
     * constructor or with ::setValue(). For a formatted version of the value,
     * use ::getText() instead.
     *
     * @return array
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of this entry.
     *
     * @param array
     *            the new value.
     *
     * @return $this
     */
    abstract public function setValue(array $value);

    /**
     * Get the value of this entry as text.
     *
     * The value will be returned in a format suitable for presentation, e.g.
     * rationals will be returned as 'x/y', ASCII strings will be returned as
     * themselves etc.
     *
     * @param bool $short
     *            (Optional) indicates to display a shorter text version if
     *            possible.
     *
     * @return string
     */
    public function getText($short = false)
    {
        return '(undefined)';
    }
}