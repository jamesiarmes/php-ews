<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PeriodType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines the name, time offset, and unique identifier for a specific stage of
 * the time zone.
 *
 * @package php-ews\Type
 */
class PeriodType extends Type
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
