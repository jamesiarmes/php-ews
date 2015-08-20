<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FolderInfoResponseMessageType
 *
 *
 * XSD Type: FolderInfoResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\ArrayOfFoldersType getFolders()
 * @method FolderInfoResponseMessageType setFolders(\jamesiarmes\PEWS\API\Type\ArrayOfFoldersType $folders)
 */
class FolderInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfFoldersType
     */
    protected $folders = null;
}
