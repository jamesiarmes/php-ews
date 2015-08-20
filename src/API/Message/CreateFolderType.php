<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing CreateFolderType
 *
 *
 * XSD Type: CreateFolderType
 *
 * @method CreateFolderType getParentFolderId()
 * @method CreateFolderType setParentFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $parentFolderId)
 * @method CreateFolderType getFolders()
 * @method CreateFolderType setFolders(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfFoldersType $folders)
 */
class CreateFolderType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\TargetFolderIdType $parentFolderId
     */
    protected $parentFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfFoldersType $folders
     */
    protected $folders = null;


}

