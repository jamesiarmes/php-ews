<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\SendItemType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to send an item in the Exchange store.
 *
 * @package php-ews\Request
 */
class SendItemType extends BaseRequestType
{
    /**
     * Contains the unique identities of items, occurrence items, and recurring
     * master items that are used to delete, send, get, move, or copy items in
     * the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * Identifies the target folder for operations that update, send, and create
     * items in the Exchange store.
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

    /**
     * Identifies whether a copy of the sent item is saved.
     *
     * The save action depends on the value of SaveItemToFolder and whether a
     * SavedItemFolderId element is present in the request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TargetFolderIdType
     */
    public $SavedItemFolderId;
}
