<?php
/**
 * Contains PerformReminderActionResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the response to a PerformReminderAction request.
 *
 * @package jamesiarmes\EWS\Types
 */
class PerformReminderActionResponseMessageType extends EWSType
{
    /**
     * Specifies the identifiers of updated reminder items.
     *
     * @since Exchange 2013
     *
     * @var NonEmptyArrayOfItemIdsType
     */
    public $UpdatedItemIds;
}
