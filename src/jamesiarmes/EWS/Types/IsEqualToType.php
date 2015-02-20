<?php
/**
 * Contains IsEqualToType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a search expression that compares a property with either a
 * constant value or another property and evaluates to true if they are equal.
 *
 * @package jamesiarmes\EWS\Types
 *
 * TwoOperandExpressionType
 */
class IsEqualToType extends EWSType
{
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
     * Represents either a property or a constant value to be used when
     * comparing with another property.
     *
     * @since Exchange 2007
     *
     * @var FieldURIOrConstantType
     */
    public $FieldURIOrConstant;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
