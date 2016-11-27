<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\PerformReminderActionType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to perform a reminder action.
 *
 * @package php-ews\Request
 */
class PerformReminderActionType extends BaseRequestType
{
    /**
     * Specifies the actions for reminder items.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfReminderItemActionType
     */
    public $ReminderItemActions;
}
