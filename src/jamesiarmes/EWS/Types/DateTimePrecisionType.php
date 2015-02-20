<?php
/**
 * Contains DateTimePrecisionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Specifies the precision for returned date/time values.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class DateTimePrecisionType extends EWSType
{
    /**
     * Indicates that date/time values should be precise to the millisecond.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const MILLISECONDS = 'Milliseconds';

    /**
     * Indicates that date/time values should be precise to the second.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const SECONDS = 'Seconds';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
