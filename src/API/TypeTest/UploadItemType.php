<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing UploadItemType
 *
 *
 * XSD Type: UploadItemType
 *
 * @method UploadItemType getCreateAction()
 * @method UploadItemType setCreateAction(string $createAction)
 * @method UploadItemType getIsAssociated()
 * @method UploadItemType setIsAssociated(boolean $isAssociated)
 * @method UploadItemType getParentFolderId()
 * @method UploadItemType setParentFolderId(FolderIdType $parentFolderId)
 * @method UploadItemType getItemId()
 * @method UploadItemType setItemId(ItemIdType $itemId)
 * @method UploadItemType getData()
 * @method UploadItemType setData(mixed $data)
 */
class UploadItemType extends TypeTest
{

    /**
     * @property string $createAction
     */
    protected $createAction = null;

    /**
     * @property boolean $isAssociated
     */
    protected $isAssociated = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType $parentFolderId
     */
    protected $parentFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property mixed $data
     */
    protected $data = null;


}

