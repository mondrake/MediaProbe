<?php

namespace FileEye\MediaProbe\Entry;

use FileEye\MediaProbe\Block\BlockBase;
use FileEye\MediaProbe\ItemDefinition;
use FileEye\MediaProbe\Data\DataElement;
use FileEye\MediaProbe\Entry\Core\EntryBase;
use FileEye\MediaProbe\MediaProbe;
use FileEye\MediaProbe\Utility\ConvertBytes;

/**
 * Class used to manipulate strings in the format Windows XP uses.
 *
 * When examining the file properties of an image in Windows XP one can fill in
 * title, comment, author, keyword, and subject fields.
 * Filling those fields and pressing OK will result in the data being written
 * into the Exif data in the image.
 *
 * The data is written in a non-standard format and can thus not be loaded
 * directly --- this class is needed to translate it into normal PHP strings.
 */
class WindowsString extends EntryBase
{
      // xx @todo to be cleaned up as when back to byest is not identical

    /**
     * {@inheritdoc}
     */
    protected $name = 'WindowsString';

    /**
     * {@inheritdoc}
     */
    protected $formatName = 'Byte';

/*        $bytes = $data_element->getBytes(0, min($data_element->getSize(), $item_definition->getValuesCount()));
        // Remove any question marks that have been introduced because of illegal characters.
        $value = str_replace('?', '', mb_convert_encoding($bytes, 'UTF-8', 'UCS-2LE'));
        $this->setDataElement([$value]);*/

/*    public function (DataElement $data): void
    {
        parent::setDataElement($data);
/*        $php_string = rtrim($data->getBytes(), "\0");
        $windows_string = mb_convert_encoding($php_string, 'UCS-2LE', 'auto');
        $this->components = strlen($windows_string) + 2;*/
/*        $this->validateDataElement();
}*/

    protected function validateDataElement(): void
    {
        $this->components = $data->getSize();

        $this->debug("text: {text}", ['text' => $this->toString()]);
    }

    public function getValue(array $options = [])
    {
        $format = $options['format'] ?? null;
        switch ($format) {
            case 'phpExif':
                return mb_convert_encoding($this->value->getBytes(), '8bit');
            case 'exiftool':
            default:
                $type = $options['type'] ?? 'php';
                return $this->toString($options);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = []): string
    {
        $type = $options['type'] ?? 'php';
        switch ($type) {
            case 'php':
                $php_string = rtrim($this->value->getBytes(), "\0");
                return mb_convert_encoding($php_string, 'UCS-2LE', 'auto');
            default:
                return $this->value->getBytes();
        }
    }
}
