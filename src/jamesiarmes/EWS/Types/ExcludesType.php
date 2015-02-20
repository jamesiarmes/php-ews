<?php
/**
 * Contains ExcludesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a bitwise mask of a specified property and a supplied value.
 *
 * @package jamesiarmes\EWS\Types
 */
class ExcludesType extends EWSType
{
    /**
     * Represents a hexadecimal or decimal mask to be used during an Excludes
     * restriction operation.
     *
     * If the bitmask represents a hexadecimal number, it must be prefixed by 0x
     * or 0X. Otherwise, it will be considered a decimal number.
     *
     * @since Exchange 2007
     *
     * @var ExcludesValueType
     */
    public $Bitmask;

    /**
     * Identifies MAPI properties.
     *
     * @since Exchange 2007
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
