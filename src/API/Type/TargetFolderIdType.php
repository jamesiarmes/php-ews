<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing TargetFolderIdType
 *
 *
 * XSD Type: TargetFolderIdType
 *
 * @method TargetFolderIdType getFolderId()
 * @method TargetFolderIdType setFolderId(FolderIdType $folderId)
 * @method TargetFolderIdType getDistinguishedFolderId()
 * @method TargetFolderIdType setDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 */
class TargetFolderIdType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FolderIdType $folderId
     */
    protected $folderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DistinguishedFolderIdType
     * $distinguishedFolderId
     */
    protected $distinguishedFolderId = null;


}

