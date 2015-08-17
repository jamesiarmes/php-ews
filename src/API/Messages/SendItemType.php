<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing SendItemType
 *
 *
 * XSD Type: SendItemType
 *
 * @method SendItemType getSaveItemToFolder()
 * @method SendItemType setSaveItemToFolder(boolean $saveItemToFolder)
 * @method SendItemType getItemIds()
 * @method SendItemType setItemIds(\jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method SendItemType getSavedItemFolderId()
 * @method SendItemType setSavedItemFolderId(\jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $savedItemFolderId)
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

