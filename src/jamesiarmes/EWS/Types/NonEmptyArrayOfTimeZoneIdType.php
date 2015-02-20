<?php
/**
 * Contains NonEmptyArrayOfTimeZoneIdType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of time zone definition identifiers.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfTimeZoneIdType extends EWSType
{
    /**
     * The element that identifies a single time zone definition.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Id;
}
