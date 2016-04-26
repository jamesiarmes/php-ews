<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing CreateFolderType
 *
 *
 * XSD Type: CreateFolderType
 *
 * @method \jamesiarmes\PEWS\API\Type\TargetFolderIdType getParentFolderId()
 * @method CreateFolderType setParentFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $parentFolderId)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfFoldersType getFolders()
 * @method CreateFolderType setFolders(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfFoldersType $folders)
 */
class CreateFolderType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfFoldersType
     */
    protected $folders = null;
}
