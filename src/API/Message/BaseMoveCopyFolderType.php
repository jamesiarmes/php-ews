<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing BaseMoveCopyFolderType
 *
 *
 * XSD Type: BaseMoveCopyFolderType
 *
 * @method BaseMoveCopyFolderType getToFolderId()
 * @method BaseMoveCopyFolderType setToFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $toFolderId)
 * @method BaseMoveCopyFolderType getFolderIds()
 * @method BaseMoveCopyFolderType setFolderIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class BaseMoveCopyFolderType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\TargetFolderIdType $toFolderId
     */
    protected $toFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    protected $folderIds = null;
}
