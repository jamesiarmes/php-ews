<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetSharingFolderResponseMessageType
 *
 *
 * XSD Type: GetSharingFolderResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\FolderIdType getSharingFolderId()
 * @method GetSharingFolderResponseMessageType setSharingFolderId(\jamesiarmes\PEWS\API\Type\FolderIdType $sharingFolderId)
 */
class GetSharingFolderResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $sharingFolderId = null;
}
