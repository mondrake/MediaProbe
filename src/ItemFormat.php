<?php

namespace FileEye\MediaProbe;

use FileEye\MediaProbe\Collection;

/**
 * Class to retrieve item format information.
 */
class ItemFormat
{
    const BYTE = 1;
    const ASCII = 2;
    const SHORT = 3;
    const LONG = 4;
    const RATIONAL = 5;
    const SIGNED_BYTE = 6;
    const UNDEFINED = 7;
    const SIGNED_SHORT = 8;
    const SIGNED_LONG = 9;
    const SIGNED_RATIONAL = 10;
    const FLOAT = 11;
    const DOUBLE = 12;
    const SHORT_REV = 1000;
    const SHORT_RATIONAL = 1001;
    const SHORT_SIGNED_RATIONAL = 1002;
    const CHAR = 2000;

    /**
     * Returns the name of a format like 'Ascii' for the ASCII format.
     *
     * @param integer $id
     *
     * @return string
     */
    public static function getName(int $id): string
    {
        return Collection::get('Format')->getItemCollection($id)->getPropertyValue('name');
    }

    /**
     * Returns the id of a format from its name.
     *
     * @param string $name
     *
     * @return int
     */
    public static function getFromName(string $name): int
    {
        return (int) Collection::get('Format')->getItemCollectionByName($name)->getPropertyValue('item');
    }

    /**
     * Returns the size, in bytes, of a component in a given format.
     *
     * @param integer $id
     *
     * @return int
     */
    public static function getSize(int $id): int
    {
        return (int) Collection::get('Format')->getItemCollection($id)$collection->getPropertyValue('length');
    }

    /**
     * Returns the handling class of a format.
     *
     * @param integer $id
     *
     * @return string
     */
    public static function getClass(int $id): string
    {
        return Collection::get('Format')->getItemCollection($id)->getPropertyValue('class');
    }
}
