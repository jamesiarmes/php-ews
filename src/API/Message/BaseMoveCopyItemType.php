<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing BaseMoveCopyItemType
 *
 *
 * XSD Type: BaseMoveCopyItemType
 *
 * @method BaseMoveCopyItemType getToFolderId()
 * @method BaseMoveCopyItemType setToFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $toFolderId)
 * @method BaseMoveCopyItemType getItemIds()
 * @method BaseMoveCopyItemType setItemIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method BaseMoveCopyItemType getReturnNewItemIds()
 * @method BaseMoveCopyItemType setReturnNewItemIds(boolean $returnNewItemIds)
 */
class BaseMoveCopyItemType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\TargetFolderIdType $toFolderId
     */
    protected $toFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds
     */
    protected $itemIds = null;

    /**
     * @property boolean $returnNewItemIds
     */
    protected $returnNewItemIds = null;


}

