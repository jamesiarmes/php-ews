<?php
/**
 * Contains EWSType_AndType.
 */

/**
 * Represents a search expression that allows you to perform a Boolean AND
 * operation between two or more search expressions.
 *
 * The result of the AND operation is true if all the search expressions
 * contained within the And element are true.
 *
 * @package php-ews\Types
 */
class EWSType_AndType extends EWSType
{
    /**
     * Represents a search expression that enables you to perform a Boolean AND
     * operation between two or more search expressions.
     *
     * @since Exchange 2007
     *
     * @var EWSType_AndType
     */
    public $And;

    /**
     * Represents a search expression that determines whether a given property
     * contains the supplied constant string value.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ContainsExpressionType
     */
    public $Contains;

    /**
     * Performs a bitwise mask of the properties.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ExcludesType
     */
    public $Excludes;

    /**
     * Represents a search expression that returns true if the supplied property
     * exists on an item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ExistsType
     */
    public $Exists;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and evaluates to true if they are
     * equal.
     *
     * @since Exchange 2007
     *
     * @var EWSType_IsEqualToType
     */
    public $IsEqualTo;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is greater than the value or property.
     *
     * @since Exchange 2007
     *
     * @var EWSType_IsGreaterThanType
     */
    public $IsGreaterThan;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is greater than or equal to the value or property.
     *
     * @since Exchange 2007
     *
     * @var EWSType_IsGreaterThanOrEqualToType
     */
    public $IsGreaterThanOrEqualTo;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is less than the value or property.
     *
     * @since Exchange 2007
     *
     * @var EWSType_IsLessThanType
     */
    public $IsLessThan;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is less than or equal to the value or property.
     *
     * @since Exchange 2007
     *
     * @var EWSType_IsLessThanOrEqualToType
     */
    public $IsLessThanOrEqualTo;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the values are not
     * the same.
     *
     * @since Exchange 2007
     *
     * @var EWSType_IsNotEqualToType
     */
    public $IsNotEqualTo;

    /**
     * Represents a search expression that negates the Boolean value of the
     * search expression it contains.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NotType
     */
    public $Not;

    /**
     * Represents a search expression that performs a logical OR operation on
     * the search expression it contains.
     *
     * The Or element will return true if any of its children return true.
     *
     * @since Exchange 2007
     *
     * @var EWSType_OrType
     */
    public $Or;
}
