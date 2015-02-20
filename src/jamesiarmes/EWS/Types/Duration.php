<?php
/**
 * Contains Duration.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a time span.
 *
 * @package jamesiarmes\EWS\Types
 */
class Duration extends EWSType
{
    /**
     * Represents the end of the time span.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $EndTime;

    /**
     * Represents the start of the time span.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $StartTime;
}
