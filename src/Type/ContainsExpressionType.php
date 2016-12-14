<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ContainsExpressionType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a search expression that determines whether a given property
 * contains the supplied constant string value.
 *
 * @package php-ews\Type
 */
class ContainsExpressionType extends SearchExpressionType
{
    /**
     * Identifies a constant value in a restriction.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ConstantValueType
     */
    public $Constant;

    /**
     * Determines whether the search ignores cases and spaces.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ContainmentComparisonType
     */
    public $ContainmentComparison;

    /**
     * Identifies the boundaries of a search.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ContainmentModeType
     */
    public $ContainmentMode;
}
