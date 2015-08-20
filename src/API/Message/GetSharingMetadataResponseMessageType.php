<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetSharingMetadataResponseMessageType
 *
 *
 * XSD Type: GetSharingMetadataResponseMessageType
 *
 * @method array getEncryptedSharedFolderDataCollection()
 * @method GetSharingMetadataResponseMessageType setEncryptedSharedFolderDataCollection(array $encryptedSharedFolderDataCollection)
 * @method array getInvalidRecipients()
 * @method GetSharingMetadataResponseMessageType setInvalidRecipients(array $invalidRecipients)
 */
class GetSharingMetadataResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EncryptedSharedFolderDataType[]
     */
    protected $encryptedSharedFolderDataCollection = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\InvalidRecipientType[]
     */
    protected $invalidRecipients = null;
}
