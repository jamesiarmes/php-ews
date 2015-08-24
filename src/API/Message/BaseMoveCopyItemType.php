<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing BaseMoveCopyItemType
 *
 *
 * XSD Type: BaseMoveCopyItemType
 *
 * @method \jamesiarmes\PEWS\API\Type\TargetFolderIdType getToFolderId()
 * @method BaseMoveCopyItemType setToFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $toFolderId)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method BaseMoveCopyItemType setItemIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method boolean isReturnNewItemIds()
 * @method boolean getReturnNewItemIds()
 * @method BaseMoveCopyItemType setReturnNewItemIds(boolean $returnNewItemIds)
 */
class BaseMoveCopyItemType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $toFolderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @var boolean
     */
    protected $returnNewItemIds = null;
}
