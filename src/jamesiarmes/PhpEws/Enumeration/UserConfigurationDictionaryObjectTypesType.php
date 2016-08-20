<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\UserConfigurationDictionaryObjectTypesType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines a dictionary object's type.
 *
 * @package php-ews\Enumeration
 */
class UserConfigurationDictionaryObjectTypesType extends Enumeration
{
    /**
     * Defines the object's type as a boolean.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const BOOLEAN = 'Boolean';

    /**
     * Defines the object's type as a byte.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const BYTE = 'Byte';

    /**
     * Defines the object's type as an array of bytes.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const BYTE_ARRAY = 'ByteArray';

    /**
     * Defines the object's type as a date and time.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DATE_TIME = 'DateTime';

    /**
     * Defines the object's type as a 32-bit integer.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    CONST INTEGER_32 = 'Integer32';

    /**
     * Defines the object's type as a 64-bit integer.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INTEGER_64 = 'Integer64';

    /**
     * Defines the object's type as a string.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const STRING = 'String';

    /**
     * Defines the object's type as an array of strings.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const STRING_ARRAY = 'StringArray';

    /**
     * Defines the object's type as an unsigned 32-bit integer.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const UNSIGNED_INTEGER_32 = 'UnsignedInteger32';

    /**
     * Defines the object's type as an unsigned 64-bit integer.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const UNSIGNED_INTEGER_64 = 'UnsignedInteger64';
}
