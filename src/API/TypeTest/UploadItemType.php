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
 * @method UploadItemType setCreateAction($createAction)
 * @method UploadItemType getIsAssociated()
 * @method UploadItemType setIsAssociated($isAssociated)
 * @method UploadItemType getParentFolderId()
 * @method UploadItemType setParentFolderId($parentFolderId)
 * @method UploadItemType getItemId()
 * @method UploadItemType setItemId($itemId)
 * @method UploadItemType getData()
 * @method UploadItemType setData($data)
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

