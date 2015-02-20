<?php
/**
 * Contains ConstantValueType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies a constant value in a restriction.
 *
 * @package jamesiarmes\EWS\Types
 */
class ConstantValueType extends EWSType
{
    /**
     * Specifies the value to compare in the restriction.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Value;
}
