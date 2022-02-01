<?php

namespace FileEye\MediaProbe\Utility;

/**
 * Conversion functions to and from bytes and numerals.
 *
 * All the methods are static and rely on an argument that specifies the byte
 * order to be used. This must be one of the class constants: LITTLE_ENDIAN
 * or BIG_ENDIAN.
 */
class ConvertBytes
{
    /**
     * Little-endian (Intel) byte order.
     *
     * Data stored in little-endian byte order store the least significant byte
     * first, so the number 0x12345678 becomes 0x78 0x56 0x34 0x12 when stored
     * with little-endian byte order.
     */
    const LITTLE_ENDIAN = 1;

    /**
     * Big-endian (Motorola) byte order.
     *
     * Data stored in big-endian byte order store the most significant byte
     * first, so the number 0x12345678 becomes 0x12 0x34 0x56 0x78 when stored
     * with big-endian byte order.
     */
    const BIG_ENDIAN = 0;

    /**
     * Convert an unsigned short into two bytes.
     *
     * @param int $value
     *            the unsigned short that will be converted. The lower two bytes
     *            will be extracted regardless of the actual size passed.
     * @param int $byte_order
     *            one of {@link LITTLE_ENDIAN} and {@link BIG_ENDIAN}.
     *
     * @return string the bytes representing the unsigned short.
     */
    public static function fromShort(int $value, int $byte_order = self::BIG_ENDIAN): string
    {
        if ($byte_order === static::LITTLE_ENDIAN) {
            return chr($value) . chr($value >> 8);
        } else {
            return chr($value >> 8) . chr($value);
        }
    }

    /**
     * Convert an unsigned short into two bytes, reversed byte order.
     *
     * @param int $value
     *            the unsigned short that will be converted. The lower two bytes
     *            will be extracted regardless of the actual size passed.
     * @param int $byte_order
     *            one of {@link LITTLE_ENDIAN} and {@link BIG_ENDIAN}.
     *
     * @return string the bytes representing the unsigned short.
     */
    public static function fromShortRev(int $value, int $byte_order = self::BIG_ENDIAN): string
    {
        if ($byte_order == static::LITTLE_ENDIAN) {
            return chr($value >> 8) . chr($value);
        } else {
            return chr($value) . chr($value >> 8);
        }
    }

    /**
     * Convert a signed short into two bytes.
     *
     * @param int $value
     *            the signed short that will be converted. The lower two bytes
     *            will be extracted regardless of the actual size passed.
     * @param int $byte_order
     *            one of {@link LITTLE_ENDIAN} and {@link BIG_ENDIAN}.
     *
     * @return string the bytes representing the signed short.
     */
    public static function fromSignedShort(int $value, int $byte_order = self::BIG_ENDIAN): string
    {
        // We can just use fromShort, since signed shorts fits well
        // within the 32 bit signed integers used in PHP.
        return static::fromShort($value, $byte_order);
    }

    /**
     * Convert an unsigned long into four bytes.
     *
     * Because PHP limits the size of integers to 32 bit signed, one cannot
     * really have an unsigned integer in PHP. But integers larger than 2^31-1
     * will be promoted to 64 bit signed floating point numbers, and so such
     * large numbers can be handled too.
     *
     * @param int $value
     *            the unsigned long that will be converted. The argument will be
     *            treated as an unsigned 32 bit integer and the lower four bytes
     *            will be extracted. Treating the argument as an unsigned
     *            integer means that the absolute value will be used. Use
     *            {@link fromSignedLong} to convert signed integers.
     * @param int $byte_order
     *            one of {@link LITTLE_ENDIAN} and {@link BIG_ENDIAN}.
     *
     * @return string the bytes representing the unsigned long.
     */
    public static function fromLong(int $value, int $byte_order = self::BIG_ENDIAN): string
    {
        // We cannot convert the number to bytes in the normal way (using shifts
        // and modulo calculations) because the PHP operator >> and function
        // chr() clip their arguments to 2^31-1, which is the largest signed
        // integer known to PHP. But luckily base_convert handles such big
        // numbers.
        $hex = str_pad(base_convert($value, 10, 16), 8, '0', STR_PAD_LEFT);
        if ($byte_order == static::LITTLE_ENDIAN) {
            return (chr(hexdec($hex[6] . $hex[7])) . chr(hexdec($hex[4] . $hex[5])) . chr(hexdec($hex[2] . $hex[3])) .
                 chr(hexdec($hex[0] . $hex[1])));
        } else {
            return (chr(hexdec($hex[0] . $hex[1])) . chr(hexdec($hex[2] . $hex[3])) . chr(hexdec($hex[4] . $hex[5])) .
                 chr(hexdec($hex[6] . $hex[7])));
        }
    }

    /**
     * Convert a signed long into four bytes.
     *
     * @param int $value
     *            the signed long that will be converted. The argument will be
     *            treated as a signed 32 bit integer, from which the lower four
     *            bytes will be extracted.
     * @param int $byte_order
     *            one of {@link LITTLE_ENDIAN} and {@link BIG_ENDIAN}.
     *
     * @return string the bytes representing the signed long.
     */
    public static function fromSignedLong(int $value, int $byte_order = self::BIG_ENDIAN): string
    {
        // We can convert the number into bytes in the normal way using shifts
        // and modulo calculations here (in contrast with fromLong) because
        // PHP automatically handles 32 bit signed integers for us.
        if ($byte_order == static::LITTLE_ENDIAN) {
            return (chr($value) . chr($value >> 8) . chr($value >> 16) . chr($value >> 24));
        } else {
            return (chr($value >> 24) . chr($value >> 16) . chr($value >> 8) . chr($value));
        }
    }

    /**
     * Convert a rational into eight bytes.
     */
    public static function fromRational(array $value, int $byte_order = self::BIG_ENDIAN): string
    {
        if (count($value) !== 2) {
            throw new \InvalidArgumentException('Invalid input data for ' . __METHOD__);
        }

        return static::fromLong($value[0], $byte_order) . static::fromLong($value[1], $byte_order);
    }

    /**
     * Convert a signed rational into eight bytes.
     */
    public static function fromSignedRational(array $value, int $byte_order = self::BIG_ENDIAN): string
    {
        if (count($value) !== 2) {
            throw new \InvalidArgumentException('Invalid input data for ' . __METHOD__);
        }

        return static::fromSignedLong($value[0], $byte_order) . static::fromSignedLong($value[1], $byte_order);
    }

    /**
     * Extract an unsigned byte from a string of bytes.
     *
     * @param string $bytes
     *            the bytes.
     *
     * @return int
     *            the unsigned byte found at the first position of the string.
     */
    public static function toByte(string $bytes): int
    {
        if (!is_string($bytes) || strlen($bytes) < 1) {
            throw new \InvalidArgumentException('Invalid input data for ' . __METHOD__);
        }
        return ord($bytes[0]);
    }

    /**
     * Extract a signed byte from a string bytes.
     *
     * @param string $bytes
     *            the bytes.
     *
     * @return int
     *            the signed byte found at the first position of the string, in
     *            the range -128 to 127.
     */
    public static function toSignedByte(string $bytes): int
    {
        if (!is_string($bytes) || strlen($bytes) < 1) {
            throw new \InvalidArgumentException('Invalid input data for ' . __METHOD__);
        }
        $n = static::toByte($bytes);
        return $n > 127 ? $n - 256 : $n;
    }

    /**
     * Extract an unsigned short from bytes.
     *
     * @param string $bytes
     *            the bytes.
     * @param int $byte_order
     *            one of ::LITTLE_ENDIAN or ::BIG_ENDIAN.
     *
     * @return int
     *            the unsigned short found at the first position of the string,
     *            in the range 0 to 65535.
     */
    public static function toShort(string $bytes, int $byte_order = self::BIG_ENDIAN): int
    {
        if (!is_string($bytes) || strlen($bytes) < 2) {
            throw new \InvalidArgumentException('Invalid input data for ' . __METHOD__);
        }
        if ($byte_order == static::LITTLE_ENDIAN) {
            return (ord($bytes[1]) * 256 + ord($bytes[0]));
        } else {
            return (ord($bytes[0]) * 256 + ord($bytes[1]));
        }
    }

    /**
     * Extract an unsigned short from bytes, reversed byte order.
     *
     * @param string $bytes
     *            the bytes.
     * @param int $byte_order
     *            one of ::LITTLE_ENDIAN or ::BIG_ENDIAN.
     *
     * @return int
     *            the unsigned short found at the first position of the string,
     *            in the range 0 to 65535.
     */
    public static function toShortRev(string $bytes, int $byte_order = self::BIG_ENDIAN): int
    {
        if (!is_string($bytes) || strlen($bytes) < 2) {
            throw new \InvalidArgumentException('Invalid input data for ' . __METHOD__);
        }
        if ($byte_order == static::LITTLE_ENDIAN) {
            return (ord($bytes[0]) * 256 + ord($bytes[1]));
        } else {
            return (ord($bytes[1]) * 256 + ord($bytes[0]));
        }
    }

    /**
     * Extract a signed short from bytes.
     *
     * @param string $bytes
     *            the bytes.
     * @param int $byte_order
     *            one of ::LITTLE_ENDIAN or ::BIG_ENDIAN.
     *
     * @return int
     *            the signed short found at the first position of the string, in
     *            the range -32768 to 32767.
     */
    public static function toSignedShort(string $bytes, int $byte_order = self::BIG_ENDIAN): int
    {
        if (!is_string($bytes) || strlen($bytes) < 2) {
            throw new \InvalidArgumentException('Invalid input data for ' . __METHOD__);
        }
        $n = static::toShort($bytes, $byte_order);
        return $n > 32767 ? $n - 65536 : $n;
    }

    /**
     * Extract an unsigned long from bytes.
     *
     * @param string $bytes
     *            the bytes.
     * @param int $byte_order
     *            one of ::LITTLE_ENDIAN or ::BIG_ENDIAN.
     *
     * @return int
     *            the unsigned long found at the first position of the string,
     *            in the range 0 to 4294967295.
     */
    public static function toLong(string $bytes, int $byte_order = self::BIG_ENDIAN): int
    {
        if (!is_string($bytes) || strlen($bytes) < 4) {
            throw new \InvalidArgumentException('Invalid input data for ' . __METHOD__);
        }
        if ($byte_order == static::LITTLE_ENDIAN) {
            return (ord($bytes[3]) * 16777216 + ord($bytes[2]) * 65536 + ord($bytes[1]) * 256 + ord($bytes[0]));
        } else {
            return (ord($bytes[0]) * 16777216 + ord($bytes[1]) * 65536 + ord($bytes[2]) * 256 + ord($bytes[3]));
        }
    }

    /**
     * Extract a signed long from bytes.
     *
     * @param string $bytes
     *            the bytes.
     * @param int $byte_order
     *            one of ::LITTLE_ENDIAN or ::BIG_ENDIAN.
     *
     * @return int
     *            the signed long found at the first position of the string,
     *            in the range -2147483648 to 2147483647.
     */
    public static function toSignedLong(string $bytes, int $byte_order = self::BIG_ENDIAN): int
    {
        if (!is_string($bytes) || strlen($bytes) < 4) {
            throw new \InvalidArgumentException('Invalid input data for ' . __METHOD__);
        }
        $n = static::toLong($bytes, $byte_order);
        return $n > 2147483647 ? $n - 4294967296 : $n;
    }

    /**
     * Extract an unsigned rational from bytes.
     *
     * @param string $bytes
     *            the bytes.
     * @param int $byte_order
     *            one of ::LITTLE_ENDIAN or ::BIG_ENDIAN.
     *
     * @return array
     *            the unsigned rational found at offset, an array with two
     *            integers in the range 0 to 4294967295.
     */
    public static function toRational(string $bytes, int $byte_order = self::BIG_ENDIAN): array
    {
        if (!is_string($bytes) || strlen($bytes) < 8) {
            throw new \InvalidArgumentException('Invalid input data for ' . __METHOD__);
        }
        return [
            static::toLong($bytes, $byte_order),
            static::toLong(substr($bytes, 4), $byte_order),
        ];
    }

    /**
     * Extract a signed rational from bytes.
     *
     * @param string $bytes
     *            the bytes.
     * @param int $byte_order
     *            one of ::LITTLE_ENDIAN or ::BIG_ENDIAN.
     *
     * @return array
     *            the signed rational found at offset, an array with two
     *            integers in the range -2147483648 to 2147483647.
     */
    public static function toSignedRational(string $bytes, int $byte_order = self::BIG_ENDIAN): array
    {
        if (!is_string($bytes) || strlen($bytes) < 8) {
            throw new \InvalidArgumentException('Invalid input data for ' . __METHOD__);
        }
        return [
            static::toSignedLong($bytes, $byte_order),
            static::toSignedLong(substr($bytes, 4), $byte_order),
        ];
    }
}
