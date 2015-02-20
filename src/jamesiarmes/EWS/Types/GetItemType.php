<?php
/**
 * Contains GetItemType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to get an item from a mailbox in the Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class GetItemType extends EWSType
{
    /**
     * Contains the unique identities of items, occurrence items, and recurring
     * master items that are used to get items from the Exchange store.
     *
     * These items represent contacts, tasks, messages, calendar items, meeting
     * requests, and other valid items in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * Identifies the item properties and content to include in a GetItem
     * response.
     *
     * @since Exchange 2007
     *
     * @var ItemResponseShapeType
     */
    public $ItemShape;
}
