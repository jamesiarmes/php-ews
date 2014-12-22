<?php
/**
 * Contains EWSType_WorkingHours.
 */

/**
 * Represents the time zone settings and working hours for the requested mailbox
 * user.
 *
 * @package php-ews\Types
 */
class EWSType_WorkingHours extends EWSType
{
    /**
     * Contains elements that identify time zone information.
     *
     * This element also contains information about the transition between
     * standard time and daylight saving time.
     *
     * This element is required if the WorkingHours element is used.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SerializableTimeZone
     */
    public $TimeZone;

    /**
     * Contains working period information for the mailbox user.
     *
     * This element is required if the WorkingHours element is used.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
