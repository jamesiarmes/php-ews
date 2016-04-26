<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing MovedCopiedEventType
 *
 *
 * XSD Type: MovedCopiedEventType
 *
 * @method FolderIdType getOldFolderId()
 * @method MovedCopiedEventType setOldFolderId(FolderIdType $oldFolderId)
 * @method ItemIdType getOldItemId()
 * @method MovedCopiedEventType setOldItemId(ItemIdType $oldItemId)
 * @method FolderIdType getOldParentFolderId()
 * @method MovedCopiedEventType setOldParentFolderId(FolderIdType $oldParentFolderId)
 */
class MovedCopiedEventType extends BaseObjectChangedEventType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $oldFolderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $oldItemId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $oldParentFolderId = null;
}
