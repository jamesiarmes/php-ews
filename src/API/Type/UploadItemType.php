<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

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
 * @method UploadItemType setData(string $data)
 */
class UploadItemType extends Type
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
     * @property \jamesiarmes\PEWS\API\Type\FolderIdType $parentFolderId
     */
    protected $parentFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property string $data
     */
    protected $data = null;


}

