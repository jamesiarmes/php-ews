<?php
/**
 * Contains EWSType_PerformReminderActionResponseMessageType.
 */

/**
 * Represents the response to a PerformReminderAction request.
 *
 * @package php-ews\Types
 */
class EWSType_PerformReminderActionResponseMessageType extends EWSType
{
    /**
     * Specifies the identifiers of updated reminder items.
     *
     * @since Exchange 2013
     *
     * @var EWSType_NonEmptyArrayOfItemIdsType
     */
    public $UpdatedItemIds;
}
