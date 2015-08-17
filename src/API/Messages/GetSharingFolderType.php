<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetSharingFolderType
 *
 *
 * XSD Type: GetSharingFolderType
 *
 * @method GetSharingFolderType getSmtpAddress()
 * @method GetSharingFolderType setSmtpAddress(string $smtpAddress)
 * @method GetSharingFolderType getDataType()
 * @method GetSharingFolderType setDataType(string $dataType)
 * @method GetSharingFolderType getSharedFolderId()
 * @method GetSharingFolderType setSharedFolderId(string $sharedFolderId)
 */
class GetSharingFolderType extends BaseRequestType
{

    /**
     * @property string $smtpAddress
     */
    protected $smtpAddress = null;

    /**
     * @property string $dataType
     */
    protected $dataType = null;

    /**
     * @property string $sharedFolderId
     */
    protected $sharedFolderId = null;


}

