<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing BaseMoveCopyItemType
 *
 *
 * XSD Type: BaseMoveCopyItemType
 *
 * @method BaseMoveCopyItemType getToFolderId()
 * @method BaseMoveCopyItemType setToFolderId(\jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $toFolderId)
 * @method BaseMoveCopyItemType getItemIds()
 * @method BaseMoveCopyItemType setItemIds(\jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method BaseMoveCopyItemType getReturnNewItemIds()
 * @method BaseMoveCopyItemType setReturnNewItemIds(boolean $returnNewItemIds)
 */
class BaseMoveCopyItemType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $toFolderId
     */
    protected $toFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseItemIdsType $itemIds
     */
    protected $itemIds = null;

    /**
     * @property boolean $returnNewItemIds
     */
    protected $returnNewItemIds = null;


}

