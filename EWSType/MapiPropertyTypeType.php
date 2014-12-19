<?php
/**
 * Contains EWSType_MapiPropertyTypeType.
 */

/**
 * Represents the property type of a property tag.
 *
 * @package php-ews\Enumerations
 */
class EWSType_MapiPropertyTypeType extends EWSType
{
    /**
     * A double value that is interpreted as a date and time. The integer part
     * is the date and the fraction part is the time.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const APPLICATION_TIME = 'ApplicationTime';

    /**
     * An array of double values that are interpreted as a date and time.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const APPLICATION_TIME_ARRAY = 'ApplicationTimeArray';

    /**
     * A Base64-encoded binary value.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BINARY = 'Binary';

    /**
     * An array of Base64-encoded binary values.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BINARY_ARRAY = 'BinaryArray';

    /**
     * A Boolean true or false.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BOOLEAN = 'Boolean';

    /**
     * A GUID string.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CLSID = 'CLSID';

    /**
     * An array of GUID strings.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CLSID_ARRAY = 'CLSIDArray';

    /**
     * A 64-bit integer that is interpreted as the number of cents.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CURRENCY = 'Currency';

    /**
     * An array of 64-bit integers that are interpreted as the number of cents.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CURRENCY_ARRAY = 'CurrencyArray';

    /**
     * A 64-bit floating-point value.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DOUBLE = 'Double';

    /**
     * An array of 64-bit floating-point values.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DOUBLE_ARRAY = 'DoubleArray';

    /**
     * SCODE value; 32-bit unsigned integer.
     *
     * Not used for restrictions or for getting/setting values. This exists only
     * for reporting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ERROR = 'Error';

    /**
     * A 32-bit floating-point value.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FLOAT = 'Float';

    /**
     * An array of 32-bit floating-point values.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FLOAT_ARRAY = 'FloatArray';

    /**
     * A signed 32-bit (Int32) integer.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INTEGER = 'Integer';

    /**
     * An array of signed 32-bit (Int32) integers.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INTEGER_ARRAY = 'IntegerArray';

    /**
     * A signed or unsigned 64-bit (Int64) integer.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const LONG = 'Long';

    /**
     * An array of signed or unsigned 64-bit (Int64) integers.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const LONG_ARRAY = 'LongArray';

    /**
     * Indicates no property value.
     *
     * Not used for restrictions or for getting/setting values. This exists only
     * for reporting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NULL_TYPE = 'Null';

    /**
     * A pointer to an object that implements the IUnknown interface.
     *
     * Not used for restrictions or for getting/setting values. This exists only
     * for reporting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OBJECT = 'Object';

    /**
     * An array of pointers to objects that implement the IUnknown interface.
     *
     * Not used for restrictions or for getting/setting values. This exists only
     * for reporting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OBJECT_ARRAY = 'ObjectArray';

    /**
     * A signed 16-bit integer.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SHORT = 'Short';

    /**
     * An array of signed 16-bit integers.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SHORT_ARRAY = 'ShortArray';

    /**
     * A 64-bit integer data and time value in the form of a FILETIME structure.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SYSTEM_TIME = 'SystemTime';

    /**
     * An array of 64-bit integer data and time values in the form of a FILETIME
     * structure.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SYSTEM_TIME_ARRAY = 'SystemTimeArray';

    /**
     * A Unicode string.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const STRING = 'String';

    /**
     * An array of Unicode strings.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const STRING_ARRAY = 'StringArray';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
