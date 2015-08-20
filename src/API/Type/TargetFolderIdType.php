<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing TargetFolderIdType
 *
 *
 * XSD Type: TargetFolderIdType
 *
 * @method FolderIdType getFolderId()
 * @method TargetFolderIdType setFolderId(FolderIdType $folderId)
 * @method DistinguishedFolderIdType getDistinguishedFolderId()
 * @method TargetFolderIdType setDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 */
class TargetFolderIdType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DistinguishedFolderIdType
     */
    protected $distinguishedFolderId = null;
}
