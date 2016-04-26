<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetSharingFolderType
 *
 *
 * XSD Type: GetSharingFolderType
 *
 * @method string getSmtpAddress()
 * @method GetSharingFolderType setSmtpAddress(string $smtpAddress)
 * @method string getDataType()
 * @method GetSharingFolderType setDataType(string $dataType)
 * @method string getSharedFolderId()
 * @method GetSharingFolderType setSharedFolderId(string $sharedFolderId)
 */
class GetSharingFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $smtpAddress = null;

    /**
     * @var string
     */
    protected $dataType = null;

    /**
     * @var string
     */
    protected $sharedFolderId = null;
}
