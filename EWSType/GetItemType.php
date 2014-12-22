<?php
/**
 * Contains EWSType_GetItemType.
 */

/**
 * Defines a request to get an item from a mailbox in the Exchange store.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetItemType extends EWSType
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
     * @var EWSType_NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * Identifies the item properties and content to include in a GetItem
     * response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemResponseShapeType
     */
    public $ItemShape;
}
