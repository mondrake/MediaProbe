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
     * The collections' index.
     *
     * @var Collection
     */
    protected static $collectionIndex;

    /**
     * Default namespace for concrete Collection classes.
     *
     * @var string
     */
    protected static $defaultNamespace = __NAMESPACE__;

    /**
     * Sets the compiled MediaProbe collection mapper class.
     *
     * @param string|null $class
     *   The FQCN of the class containing the MediaProbe specification mapper. If null, the default one will be used.
     */
    public static function setCollectionIndex(?string $class): void
    {
        static::$collectionIndex = $class === null ? new Core() : new $class();
    }

    /**
     * Gets the compiled MediaProbe collection mapper class.
     *
     * In case the map is not yet initialized, defaults to the pre-compiled one.
     */
    protected static function getCollectionIndex(): Collection
    {
        if (!isset(static::$collectionIndex)) {
            static::setCollectionIndex(null);
        }
        return static::$collectionIndex;
    }

    /**
     * Returns the ids of the defined collections.
     *
     * @return array
     *   A simple array, with the list of the collection ids.
     */
    public static function listCollections(): array
    {
        return array_keys(static::getCollectionIndex()->getPropertyValue('collections'));
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
     *
     * @throws CollectionException
     *   When the collection does not exist.
     */
    public static function get(string $id, array $overrides = []): Collection
    {
        if (!isset(static::getCollectionIndex()->hasProperty('collections')[$id])) {
            throw new CollectionException('Missing collection \'%s\'', $id);
        }
        $class = static::$defaultNamespace . '\\' . $id;
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
        if (!isset(static::getCollectionIndex()->hasProperty('collectionsByName')[$collection_name])) {
            throw new CollectionException('Missing collection \'%s\'', $collection_name);
        }
        return static::get(static::getCollectionIndex()->getPropertyValue('collectionsByName')[$collection_name]);
    }
}
