<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UpdateFolderType
 *
 *
 * XSD Type: UpdateFolderType
 *
 * @method array getFolderChanges()
 * @method UpdateFolderType setFolderChanges(array $folderChanges)
 */
class UpdateFolderType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderChangeType[]
     */
    protected $folderChanges = null;
}
