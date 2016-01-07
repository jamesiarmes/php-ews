<?php
/**
 * Contains EWSType_SendItemType.
 */

/**
 * Defines a request to send an item in the Exchange store.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_SendItemType extends EWSType
{
    /**
     * Contains the unique identities of items, occurrence items, and recurring
     * master items that are used to delete, send, get, move, or copy items in
     * the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * Identifies the target folder for operations that update, send, and create
     * items in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * Identifies whether a copy of the sent item is saved.
     *
     * The save action depends on the value of SaveItemToFolder and whether a
     * SavedItemFolderId element is present in the request.
     *
     * This element is required.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $SaveItemToFolder;
}
