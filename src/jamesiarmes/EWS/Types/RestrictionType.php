<?php
/**
 * Contains RestrictionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the restriction or query that is used to filter items or folders
 * in FindItem/FindFolder and search folder operations.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend MultipleOperandBooleanExpressionType.
 */
class RestrictionType extends EWSType
{
    /**
     * Represents a search expression that enables you to perform a Boolean AND
     * operation between two or more search expressions.
     *
     * @since Exchange 2007
     *
     * @var AndType
     */
    public $And;

    /**
     * Represents a search expression that determines whether a given property
     * contains the supplied constant string value.
     *
     * @since Exchange 2007
     *
     * @var ContainsExpressionType
     */
    public $Contains;

    /**
     * Performs a bitwise mask of the properties.
     *
     * @since Exchange 2007
     *
     * @var ExcludesType
     */
    public $Excludes;

    /**
     * Represents a search expression that returns true if the supplied property
     * exists on an item.
     *
     * @since Exchange 2007
     *
     * @var ExistsType
     */
    public $Exists;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and evaluates to true if they are
     * equal.
     *
     * @since Exchange 2007
     *
     * @var IsEqualToType
     */
    public $IsEqualTo;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is greater than the value or property.
     *
     * @since Exchange 2007
     *
     * @var IsGreaterThanType
     */
    public $IsGreaterThan;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is greater than or equal to the value or property.
     *
     * @since Exchange 2007
     *
     * @var IsGreaterThanOrEqualToType
     */
    public $IsGreaterThanOrEqualTo;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is less than the value or property.
     *
     * @since Exchange 2007
     *
     * @var IsLessThanType
     */
    public $IsLessThan;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is less than or equal to the value or property.
     *
     * @since Exchange 2007
     *
     * @var IsLessThanOrEqualToType
     */
    public $IsLessThanOrEqualTo;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the values are not
     * the same.
     *
     * @since Exchange 2007
     *
     * @var IsNotEqualToType
     */
    public $IsNotEqualTo;

    /**
     * Represents a search expression that negates the Boolean value of the
     * search expression it contains.
     *
     * @since Exchange 2007
     *
     * @var NotType
     */
    public $Not;

    /**
     * Represents a search expression that performs a logical OR operation on
     * the search expression it contains. The Or element will return true if any
     * of its children return true.
     *
     * @since Exchange 2007
     *
     * @var OrType
     */
    public $Or;
}
