<?php
/**
 * The Contains element represents a search expression that determines whether a
 * given property contains the supplied constant string value.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ContainsExpressionType type.
 */
class EWSType_ContainsExpressionType extends EWSType
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

    /**
     * Identifies the boundaries of a search.
     *
     * @var EWSType_ContainmentModeType
     */
    public $ContainmentMode;

    /**
     * Determines whether the search ignores cases and spaces.
     *
     * @var EWSType_ContainmentComparisonType
     */
    public $ContainmentComparison;
}
