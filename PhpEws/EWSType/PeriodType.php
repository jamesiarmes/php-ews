<?php
/**
 * The Period element defines the name, time offset, and unique identifier for a
 * specific stage of the time zone.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PeriodType type.
 */
class EWSType_PeriodType extends EWSType
{
    /**
     * An xs:duration value that represents the time offset from Coordinated
     * Universal Time (UTC) for the period..
     *
     * @var string
     */
    public $Bias;

    /**
     * A string value that represents the descriptive name of the period.
     *
     * @var string
     */
    public $Name;

    /**
     * A string value that represents the identifier for the period.
     *
     * @var string
     */
    public $Id;
}
