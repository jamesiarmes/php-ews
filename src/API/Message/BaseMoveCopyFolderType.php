<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing BaseMoveCopyFolderType
 *
 *
 * XSD Type: BaseMoveCopyFolderType
 *
 * @method \jamesiarmes\PEWS\API\Type\TargetFolderIdType getToFolderId()
 * @method BaseMoveCopyFolderType setToFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $toFolderId)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method BaseMoveCopyFolderType setFolderIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class BaseMoveCopyFolderType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $toFolderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
