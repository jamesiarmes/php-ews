<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SendItemType
 *
 *
 * XSD Type: SendItemType
 *
 * @method SendItemType getSaveItemToFolder()
 * @method SendItemType setSaveItemToFolder(boolean $saveItemToFolder)
 * @method SendItemType getItemIds()
 * @method SendItemType setItemIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method SendItemType getSavedItemFolderId()
 * @method SendItemType setSavedItemFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $savedItemFolderId)
 */
class SendItemType extends BaseRequestType
{

    /**
     * @property boolean $saveItemToFolder
     */
    protected $saveItemToFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds
     */
    protected $itemIds = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TargetFolderIdType $savedItemFolderId
     */
    protected $savedItemFolderId = null;
}
