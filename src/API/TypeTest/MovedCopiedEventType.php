<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing MovedCopiedEventType
 *
 *
 * XSD Type: MovedCopiedEventType
 *
 * @method MovedCopiedEventType getOldFolderId()
 * @method MovedCopiedEventType setOldFolderId(FolderIdType $oldFolderId)
 * @method MovedCopiedEventType getOldItemId()
 * @method MovedCopiedEventType setOldItemId(ItemIdType $oldItemId)
 * @method MovedCopiedEventType getOldParentFolderId()
 * @method MovedCopiedEventType setOldParentFolderId(FolderIdType $oldParentFolderId)
 */
class MovedCopiedEventType extends BaseObjectChangedEventType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType $oldFolderId
     */
    protected $oldFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $oldItemId
     */
    protected $oldItemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType $oldParentFolderId
     */
    protected $oldParentFolderId = null;


}

