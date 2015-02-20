<?php
/**
 * Contains ArrayOfStringAttributedValuesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of names and the identifiers of their source attributions
 * for the associated persona.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfStringAttributedValuesType extends EWSType
{
    /**
     * Specifies an instance in an array of attributes associated with a persona
     * element.
     *
     * @since Exchange 2013
     *
     * @var StringAttributedValueType
     */
    public $StringAttributedValue;
}
