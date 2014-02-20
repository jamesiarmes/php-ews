<?php
/**
 * The FieldURIOrConstant element represents either a property or a constant
 * value to be used when comparing with another property.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FieldURIOrConstantType type.
 */
class EWSType_FieldURIOrConstantType extends EWSType
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
     * Identifies a constant value in a restriction.
     *
     * @var EWSType_ConstantValueType
     */
    public $Constant;
}
