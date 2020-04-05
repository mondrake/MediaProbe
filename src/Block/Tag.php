<?php

namespace FileEye\MediaProbe\Block;

use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\ElementInterface;
use FileEye\MediaProbe\Entry\Core\EntryInterface;
use FileEye\MediaProbe\MediaProbe;
use FileEye\MediaProbe\MediaProbeException;
use FileEye\MediaProbe\ItemFormat;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Collection;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class representing an Exif TAG as an MediaProbe block.
 */
class Tag extends BlockBase
{
    // xx
    protected $definition;

    /**
     * Constructs a Tag block object.
     */
    public function __construct(ItemDefinition $definition, BlockBase $parent, ElementInterface $reference = null)
    {
        $collection = $definition->getCollection();

        parent::__construct($collection, $parent, $reference);

        $this->setAttribute('id', $collection->getPropertyValue('item'));

        $this->definition = $definition;
        $this->validate();
    }

    /**
     * Validates against the specification, if defined.
     */
    public function validate()
    {
        // Check if MediaProbe has a definition for this TAG.
        if (in_array($this->collection->getId(), ['VoidCollection', 'UnknownTag'])) {
            $this->notice("No specification for item {item} in '{ifd}'", [
                'item' => $this->getCollection()->getId(),
                'ifd' => $this->getParentElement()->getCollection()->getPropertyValue('name') ?? 'n/a',
            ]);
        } else {
            // Warn if format is not as expected.
            $expected_format = $this->getCollection()->getPropertyValue('format');
            if ($expected_format !== null && $this->getFormat() !== null && !in_array($this->getFormat(), $expected_format)) {
                $expected_format_names = [];
                foreach ($expected_format as $expected_format_id) {
                    $expected_format_names[] = ItemFormat::getName($expected_format_id);
                }
                $this->warning("Found {format_name} data format, expected {expected_format_names}", [
                    'format_name' => ItemFormat::getName($this->getFormat()),
                    'expected_format_names' => implode(', ', $expected_format_names),
                ]);
            }

            // Warn if components are not as expected.
            $expected_components = $this->collection->getPropertyValue('components');
            if ($expected_components !== null && $this->getComponents() !== null && $this->getComponents() !== $expected_components) {
                $this->warning("Found {components} data components, expected {expected_components}", [
                    'components' => $this->getComponents(),
                    'expected_components' => $expected_components,
                ]);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadFromData(DataElement $data_element): void
    {
        $this->debugBlockInfo($data_element);

        $valid = true;

        $class = $this->getDefinition()->getEntryClass();
        $entry = new $class($this);
        try {
            $entry->loadFromData($data_element, 0, $data_element->getSize(), [], $this->getDefinition());
        } catch (DataException $e) {
            $this->error($e->getMessage());
            $valid = false;
        }

        $this->valid = $valid;
    }

    /**
     * {@inheritdoc}
     */
    public function getValue(array $options = [])
    {
        return $this->getElement("entry") ? $this->getElement("entry")->getValue($options) : null;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = [])
    {
        return $this->getElement("entry") ? $this->getElement("entry")->toString($options) : null;
    }

    /**
     * {@inheritdoc}
     */
    public function toBytes($order = ConvertBytes::LITTLE_ENDIAN, $offset = 0)
    {
        return $this->getElement("entry") ? $this->getElement("entry")->toBytes($order, $offset) : null;
    }

    /**
     * {@todo}
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormat()
    {
        return $this->getElement("entry") ? $this->getElement("entry")->getFormat() : $this->getDefinition()->getFormat();
    }

    /**
     * {@inheritdoc}
     */
    public function getComponents()
    {
        return $this->getElement("entry") ? $this->getElement("entry")->getComponents() : $this->getDefinition()->getValuesCount();
    }

    /**
     * {@inheritdoc}
     */
    protected function getContextPathSegmentPattern()
    {
        if ($this->getAttribute('name') !== '') {
            return '/{DOMNode}:{name}:{id}';
        }
        return '/{DOMNode}:{id}';
    }

    /**
     * {@inheritdoc}
     */
    public function debugBlockInfo(?DataElement $data_element = null)
    {
        $msg = '#{seq} @{ifdoffset} {node}';
        $item_definition_offset = $this->getDefinition()->getItemDefinitionOffset();
        $node = $this->DOMNode->nodeName;
        $name = $this->getAttribute('name');
        if ($name ==! null) {
            $msg .= ':{name}';
        }
        $title = $this->getCollection()->getPropertyValue('title');
        if ($title ==! null) {
            $msg .= ' ({title})';
        }
        if ($data_element instanceof DataWindow) {
            $msg .= ' @{offset} size {size}';
            $offset = $data_element->getAbsoluteOffset() . '/0x' . strtoupper(dechex($data_element->getAbsoluteOffset()));
        } else {
            $msg .= ' size {size} byte(s)';
        }
        $this->debug($msg, [
            'seq' => $this->getDefinition()->getSequence() + 1,
            'ifdoffset' => $item_definition_offset . '/0x' . strtoupper(dechex($item_definition_offset)),
            'node' => $node,
            'name' => $name,
            'title' => $title,
            'offset' => $offset ?? null,
            'size' => $data_element ? $data_element->getSize() : null,
        ]);
    }
}
