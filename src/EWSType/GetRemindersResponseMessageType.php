<?php
/**
 * Contains EWSType_GetRemindersResponseMessageType.
 */

/**
 * Represents the response to a GetReminders request.
 *
 * @package php-ews\Types
 */
class EWSType_GetRemindersResponseMessageType extends EWSType
{
    /**
     * Specifies the reminders returned in the response.
     *
     * @since Exchange 2013
     *
     * @var EWSType_ArrayOfRemindersType
     */
    public $Reminders;
}
