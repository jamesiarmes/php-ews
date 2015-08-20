<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SendItemType
 *
 *
 * XSD Type: SendItemType
 *
 * @method boolean getSaveItemToFolder()
 * @method SendItemType setSaveItemToFolder(boolean $saveItemToFolder)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method SendItemType setItemIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method \jamesiarmes\PEWS\API\Type\TargetFolderIdType getSavedItemFolderId()
 * @method SendItemType setSavedItemFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $savedItemFolderId)
 */
class SendItemType extends BaseRequestType
{

    /**
     * @var boolean
     */
    protected $saveItemToFolder = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;
}
