<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UploadItemType
 *
 *
 * XSD Type: UploadItemType
 *
 * @method string getCreateAction()
 * @method UploadItemType setCreateAction(string $createAction)
 * @method boolean getIsAssociated()
 * @method UploadItemType setIsAssociated(boolean $isAssociated)
 * @method FolderIdType getParentFolderId()
 * @method UploadItemType setParentFolderId(FolderIdType $parentFolderId)
 * @method ItemIdType getItemId()
 * @method UploadItemType setItemId(ItemIdType $itemId)
 * @method string getData()
 * @method UploadItemType setData(string $data)
 */
class UploadItemType extends Type
{

    /**
     * @var string
     */
    protected $createAction = null;

    /**
     * @var boolean
     */
    protected $isAssociated = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $data = null;
}
