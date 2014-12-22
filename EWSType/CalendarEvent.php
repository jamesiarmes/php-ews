<?php
/**
 * Contains EWSType_CalendarEvent.
 */

/**
 * Represents a unique calendar item occurrence.
 *
 * @package php-ews\Types
 */
class EWSType_CalendarEvent extends EWSType
{
    /**
     * Represents the start of a calendar event.
     *
     * This property is required.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $StartTime;

    /**
     * Represents the end of a calendar event.
     *
     * This property is required,
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $EndTime;

    /**
     * Represents the free/busy status set for a calendar event.
     *
     * This property is required.
     *
     * @since Exchange 2007
     *
     * @var EWSType_BusyType
     */
    public $BusyType;

    /**
     * Provides additional information for a calendar event.
     *
     * This property is optional.
     *
     * @since Exchange 2007
     *
     * @var EWSType_CalendarEventDetails
     */
    public $CalendarEventDetails;
}
