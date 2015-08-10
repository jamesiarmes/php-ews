<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing SendItemType
 *
 *
 * XSD Type: SendItemType
 *
 * @method SendItemType getSaveItemToFolder()
 * @method SendItemType setSaveItemToFolder($saveItemToFolder)
 * @method SendItemType getItemIds()
 * @method SendItemType setItemIds($itemIds)
 * @method SendItemType getSavedItemFolderId()
 * @method SendItemType setSavedItemFolderId($savedItemFolderId)
 */
class SendItemType extends BaseRequestType
{

    /**
     * @property boolean $saveItemToFolder
     */
    protected $saveItemToFolder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseItemIdsType $itemIds
     */
    protected $itemIds = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $savedItemFolderId
     */
    protected $savedItemFolderId = null;


}

