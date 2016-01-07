<?php
/**
 * Contains EWSType_Duration.
 */

/**
 * Represents a time span.
 *
 * @package php-ews\Types
 */
class EWSType_Duration extends EWSType
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
