<?php
/**
 * Contains EWSType_IsGreaterThanType.
 */

/**
 * Represents a search expression that compares a property with either a
 * constant value or another property and returns true if the first property is
 * greater.
 *
 * @package php-ews\Types
 */
class EWSType_IsGreaterThanType extends EWSType
{
    /**
     * Identifies MAPI properties.
     *
     * @since Exchnage 2007
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchnage 2007
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Represents either a property or a constant value to be used when
     * comparing with another property.
     *
     * @since Exchnage 2007
     *
     * @var EWSType_FieldURIOrConstantType
     */
    public $FieldURIOrConstant;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchnage 2007
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
