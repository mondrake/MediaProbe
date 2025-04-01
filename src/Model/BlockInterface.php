<?php declare(strict_types=1);

namespace FileEye\MediaProbe\Model;

use FileEye\MediaProbe\Data\DataElement;

/**
 * Interface for Block objects.
 */
interface BlockInterface extends ElementInterface
{
    public function fromDataElement(DataElement $dataElement): BlockInterface;
}
