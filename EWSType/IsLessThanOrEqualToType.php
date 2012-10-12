<?php
/**
 * The IsLessThanOrEqualTo element represents a search expression that compares
 * a property with either a constant value or another property and returns true
 * if the first property is less than or equal to the second.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the IsLessThanOrEqualToType type.
 */
class EWSType_IsLessThanOrEqualToType extends EWSType
{
    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Represents either a property or a constant value to be used when
     * comparing with another property.
     *
     * @var EWSType_FieldURIOrConstantType
     */
    public $FieldURIOrConstant;
}
