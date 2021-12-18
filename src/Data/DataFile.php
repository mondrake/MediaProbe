<?php

namespace FileEye\MediaProbe\Data;

/**
 * A DataElement object holding a file's data.
 */
final class DataFile extends DataElement
{
    /**
     * The file handle.
     *
     * @var resource
     */
    private $fileHandle;

    /**
     * Construct a new DataFile object with the file supplied.
     *
     * @param string $data
     *   The data string.
     */
    public function __construct(resource $fileHandle)
    {
        $this->fileHandle = $fileHandle;
        $this->start = 0;
        $this->size = fstat($this->fileHandle)['size'];
    }

    /**
     * {@inheritdoc}
     */
    public function getBytes(int $offset = 0, ?int $size = null): string
    {
        if ($offset < 0) {
            $offset += $this->size;
        }
        $this->validateOffset($offset);

        $size = $size ?? ($this->size - $offset);
        if ($size <= 0) {
            $size += $this->size - $offset;
        }
        $this->validateOffset($offset + $size - 1);

        return substr($this->data, $offset, $size);
    }
}
