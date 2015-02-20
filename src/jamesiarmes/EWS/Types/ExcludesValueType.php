<?php
/**
 * Contains ExcludesValueType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a hexadecimal or decimal mask to be used during an Excludes
 * restriction operation.
 *
 * @package jamesiarmes\EWS\Types
 */
class ExcludesValueType extends EWSType
{
    /**
     * Represents a decimal or hexadecimal bitmask.
     *
     * The value is represented by the following regular expression:
     * ((0x|0X)[0-9A-Fa-f]*)|([0-9]*).
     *
     * The following are examples of hexadecimal values for this attribute:
     * - 0x12AF
     * - 0X334AE
     *
     * The following are examples of decimal values for this attribute:
     * - 10
     * - 255
     * - 4562
     *
     * @since Exchange 2007
     *
     * @var ExcludesAttributeType
     */
    public $Value;
}
