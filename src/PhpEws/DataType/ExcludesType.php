<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * The Excludes element performs a bitwise mask of the specified property and a
 * supplied value.
 */
class ExcludesType extends DataType
{
    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Represents a hexadecimal or decimal mask to be used during an Excludes
     * restriction operation. If the bitmask represents a hexadecimal number, it
     * must be prefixed by 0x or 0X. Otherwise, it will be considered a decimal
     * number.
     *
     * @var ExcludesValueType
     */
    public $Bitmask;
}
