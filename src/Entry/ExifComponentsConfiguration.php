<?php

namespace FileEye\MediaProbe\Entry;

use FileEye\MediaProbe\Entry\Core\Undefined;
use FileEye\MediaProbe\MediaProbe;

/**
 * Decode text for an Exif/ComponentsConfiguration tag.
 */
class ExifComponentsConfiguration extends Undefined
{
    /**
     * {@inheritdoc}
     */
    public function getValue(array $options = [])
    {
        $format = $options['format'] ?? null;
        if ($format === 'exiftool') {
dump($this->value->getBytes());
            $v = [];
            for ($i = 0; $i < 4; $i ++) {
dump([$i, $this->value->getByte($i)]);
                $v[] = ord($this->value->getByte($i));
            }
dump($v);
            return implode(' ', $v);
        }
        return parent::getValue($options);
    }

    /**
     * {@inheritdoc}
     */
    public function toString(array $options = []): string
    {
        $value = $this->getValue();
        $v = '';
        for ($i = 0; $i < 4; $i ++) {
            $z = ord($value[$i]);
            $v .= $this->getMappedText($z) ?? "Err ($z)";
            if ($i < 3) {
                $v .= ', ';
            }
        }
        return $v;
    }
}
