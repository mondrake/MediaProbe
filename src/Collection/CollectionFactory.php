<?php

namespace FileEye\MediaProbe\Collection;

use FileEye\MediaProbe\Block\BlockBase;
use FileEye\MediaProbe\Block\Tag;
use FileEye\MediaProbe\Collection;
use FileEye\MediaProbe\Entry\Core\EntryInterface;

/**
 * Class to retrieve IFD and TAG information from YAML specs.
 */
abstract class CollectionFactory
{
    /**
     * Default namespace for concrete Collection classes.
     */
    const DEFAULT_COLLECTION_NAMESPACE = 'FileEye\\MediaProbe\\Collection';

    /**
     * The collection mapper class.
     *
     * @var string
     */
    protected static $mapperClass;

    /**
     * Returns the compiled MediaProbe specification map.
     *
     * In case the map is not yet initialized, defaults to the pre-compiled
     * one.
     *
     * @return array
     *   The MediaProbe specification map.
     */
    protected static function getMap(): array
    {
        if (!isset(static::$mapperClass)) {
            static::setMapperClass(null);
        }
        $class = static::$mapperClass;
        return $class::$map;
    }

    /**
     * Sets the compiled MediaProbe collection mapper class.
     *
     * @param string|null $class
     *   The class containing the MediaProbe specification map. If null, the
     *   default one will be used.
     */
    public static function setMapperClass(?string $class): void
    {
        if ($class === null) {
            static::$mapperClass = static::DEFAULT_COLLECTION_NAMESPACE . '\\Core';
        } else {
            static::$mapperClass = $class;
        }
    }

    /**
     * Returns the ids of the defined collections.
     *
     * @return array
     *   A simple array, with the list of the collection ids.
     */
    public static function listIds(): array
    {
        return array_keys(static::getMap()['collections']);
    }

    /**
     * Returns the requested collection.
     *
     * @param string $id
     *   The id of the collection.
     * @param array $overrides
     *   (Optional) If defined, overrides properties defined in the collection.
     *
     * @return Collection
     *   The collection.
     */
    public static function get(string $id, array $overrides = []): Collection
    {
        $class = static::DEFAULT_COLLECTION_NAMESPACE . '\\' . $id;
        return new $class($id, $overrides);
    }

    /**
     * Returns a collection given its name.
     *
     * @param string $collection_name
     *   The collection name.
     *
     * @return Collection
     *   The collection object.
     *
     * @throws CollectionException
     *   When the collection does not exist.
     */
    public static function getByName(string $collection_name): Collection
    {
        if (!isset(static::getMap()['collectionsByName'][$collection_name])) {
            throw new CollectionException('Missing collection \'%s\'', $collection_name);
        }
        return static::get(static::getMap()['collectionsByName'][$collection_name]);
    }
}
