<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UpdateFolderType
 *
 *
 * XSD Type: UpdateFolderType
 *
 * @method UpdateFolderType addFolderChanges(\jamesiarmes\PEWS\API\Type\FolderChangeType $folderChanges)
 * @method \jamesiarmes\PEWS\API\Type\FolderChangeType[] getFolderChanges()
 * @method UpdateFolderType setFolderChanges(array $folderChanges)
 */
class UpdateFolderType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderChangeType[]
     */
    protected $folderChanges = null;
}
