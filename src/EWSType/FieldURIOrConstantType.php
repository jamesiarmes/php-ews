<?php
/**
 * Contains EWSType_FieldURIOrConstantType.
 */

/**
 * Represents either a property or a constant value to be used when comparing
 * with another property.
 *
 * @package php-ews\Types
 */
class EWSType_FieldURIOrConstantType extends EWSType
{
    /**
     * Identifies a constant value in a restriction.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ConstantValueType
     */
    public $Constant;

    /**
     * Identifies MAPI properties.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
