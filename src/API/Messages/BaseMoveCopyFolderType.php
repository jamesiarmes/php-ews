<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing BaseMoveCopyFolderType
 *
 *
 * XSD Type: BaseMoveCopyFolderType
 *
 * @method BaseMoveCopyFolderType getToFolderId()
 * @method BaseMoveCopyFolderType setToFolderId(\jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $toFolderId)
 * @method BaseMoveCopyFolderType getFolderIds()
 * @method BaseMoveCopyFolderType setFolderIds(\jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class BaseMoveCopyFolderType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $toFolderId
     */
    protected $toFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType
     * $folderIds
     */
    protected $folderIds = null;


}

