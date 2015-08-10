<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing CreateFolderType
 *
 *
 * XSD Type: CreateFolderType
 *
 * @method CreateFolderType getParentFolderId()
 * @method CreateFolderType setParentFolderId($parentFolderId)
 * @method CreateFolderType getFolders()
 * @method CreateFolderType setFolders($folders)
 */
class CreateFolderType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $parentFolderId
     */
    protected $parentFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfFoldersType $folders
     */
    protected $folders = null;


}

