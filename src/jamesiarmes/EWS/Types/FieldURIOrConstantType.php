<?php
/**
 * Contains FieldURIOrConstantType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents either a property or a constant value to be used when comparing
 * with another property.
 *
 * @package jamesiarmes\EWS\Types
 */
class FieldURIOrConstantType extends EWSType
{
    /**
     * Identifies a constant value in a restriction.
     *
     * @since Exchange 2007
     *
     * @var ConstantValueType
     */
    public $Constant;

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
