<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetRemindersResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the response to a GetReminders request.
 *
 * @package php-ews\Types
 */
class GetRemindersResponseMessageType extends ResponseMessageType
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
