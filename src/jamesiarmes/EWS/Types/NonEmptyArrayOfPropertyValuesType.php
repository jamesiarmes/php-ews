<?php
/**
 * Contains NonEmptyArrayOfPropertyValuesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of values for an extended property.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfPropertyValuesType extends EWSType
{
    /**
     * Contains a value of an extended property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Value;
}
