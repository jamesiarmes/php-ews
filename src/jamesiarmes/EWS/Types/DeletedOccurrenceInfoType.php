<?php
/**
 * Contains DeletedOccurrenceInfoType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a deleted occurrence of a recurring calendar item.
 *
 * @package jamesiarmes\EWS\Types
 */
class DeletedOccurrenceInfoType extends EWSType
{
    /**
     * Represents the start time of a deleted occurrence of a recurring calendar
     * item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Start;
}
