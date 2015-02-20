<?php
/**
 * Contains PeriodType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the name, time offset, and unique identifier for a specific stage of
 * the time zone.
 *
 * @package jamesiarmes\EWS\Types
 */
class PeriodType extends EWSType
{
    /**
     * An xs:duration value that represents the time offset from Coordinated
     * Universal Time (UTC) for the period.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Bias;

    /**
     * A string value that represents the identifier for the period.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Id;

    /**
     * A string value that represents the descriptive name of the period.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Name;
}
