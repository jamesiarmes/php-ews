<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfReminderItemActionType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines the actions for reminder items.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfReminderItemActionType extends ArrayType
{
    /**
     * Specifies the action for a reminder item.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ReminderItemActionType
     */
    public $ReminderItemAction = array();
}
