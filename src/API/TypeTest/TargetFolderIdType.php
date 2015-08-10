<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing TargetFolderIdType
 *
 *
 * XSD Type: TargetFolderIdType
 *
 * @method TargetFolderIdType getFolderId()
 * @method TargetFolderIdType setFolderId($folderId)
 * @method TargetFolderIdType getDistinguishedFolderId()
 * @method TargetFolderIdType setDistinguishedFolderId($distinguishedFolderId)
 */
class TargetFolderIdType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType $folderId
     */
    protected $folderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\DistinguishedFolderIdType
     * $distinguishedFolderId
     */
    protected $distinguishedFolderId = null;


}

