<?php
/**
 * Contains EWSType_ContainsExpressionType.
 */

/**
 * Represents a search expression that determines whether a given property
 * contains the supplied constant string value.
 *
 * @package php-ews\Types
 */
class EWSType_ContainsExpressionType extends EWSType
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
     * Determines whether the search ignores cases and spaces.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ContainmentComparisonType
     */
    public $ContainmentComparison;

    /**
     * Identifies the boundaries of a search.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ContainmentModeType
     */
    public $ContainmentMode;

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
