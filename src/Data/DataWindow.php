<?php

namespace FileEye\MediaProbe\Data;

use FileEye\MediaProbe\ElementBase;
use FileEye\MediaProbe\MediaProbe;
use FileEye\MediaProbe\MediaProbeException;
use FileEye\MediaProbe\Utility\ConvertBytes;
use Psr\Log\LoggerInterface;

/**
 * An object opening a window on an underlying DataElement
 */
final class DataWindow extends DataElement
{
    /**
     * The underlying data element for this window.
     *
     * @var DataElement
     */
    private $underlyingDataElement;

    /**
     * Construct a new data window with the data supplied.
     *
     * @param mixed $data
     *            the data that this window will contain. This can
     *            either be given as a string (interpreted litteraly as a sequence
     *            of bytes) or a PHP image resource handle. The data will be copied
     *            into the new data window.
     *
     * @param boolean $endianess
     *            the initial byte order of the window. This must
     *            be either {@link ConvertBytes::LITTLE_ENDIAN} or {@link
     *            ConvertBytes::BIG_ENDIAN}. This will be used when integers are
     *            read from the data, and it can be changed later with {@link
     *            setByteOrder()}.
     */
    public function __construct(DataElement $dataElement, int $start = 0, ?int $size = null)
    {
        if ($start < 0) {
            throw new DataException('Invalid negative offset for DataWindow');
        }

        if ($dataElement instanceof DataWindow) {
            $this->underlyingDataElement = $dataElement->getDataElement();
            $this->start = $dataElement->getStart() + $start;
        } else {
            $this->underlyingDataElement = $dataElement;
            $this->start = $start;
        }

        $this->size = $size ?? ($dataElement->getSize() - $start);
        if ($this->size < 1) {
            throw new DataException('Zero or negative size for DataWindow');
        }
        if ($this->size > ($dataElement->getSize() - $start)) {
            throw new DataException('Excessive size for DataWindow');
        }

        $this->order = $dataElement->getByteOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function getDataElement(): DataElement
    {
        return $this->underlyingDataElement;
    }

    /**
     * {@inheritdoc}
     */
    public function getBytes(int $start = 0, ?int $size = null): string
    {
        if ($start < 0) {
            $start += $this->size;
        }
        $this->validateOffset($start);

        $size = $size ?? ($this->size - $start);
        if ($size <= 0) {
            $size += $this->size - $start;
        }
        $this->validateOffset($start + $size - 1);

        return $this->underlyingDataElement->getBytes($this->getStart() + $start, $size);
    }
}
