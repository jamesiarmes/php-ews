<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing MovedCopiedEventType
 *
 *
 * XSD Type: MovedCopiedEventType
 *
 * @method MovedCopiedEventType getOldFolderId()
 * @method MovedCopiedEventType setOldFolderId($oldFolderId)
 * @method MovedCopiedEventType getOldItemId()
 * @method MovedCopiedEventType setOldItemId($oldItemId)
 * @method MovedCopiedEventType getOldParentFolderId()
 * @method MovedCopiedEventType setOldParentFolderId($oldParentFolderId)
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

