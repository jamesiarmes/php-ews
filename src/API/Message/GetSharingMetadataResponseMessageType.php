<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetSharingMetadataResponseMessageType
 *
 *
 * XSD Type: GetSharingMetadataResponseMessageType
 *
 * @method GetSharingMetadataResponseMessageType getEncryptedSharedFolderDataCollection()
 * @method GetSharingMetadataResponseMessageType setEncryptedSharedFolderDataCollection(array $encryptedSharedFolderDataCollection)
 * @method GetSharingMetadataResponseMessageType getInvalidRecipients()
 * @method GetSharingMetadataResponseMessageType setInvalidRecipients(array $invalidRecipients)
 */
class GetSharingMetadataResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\EncryptedSharedFolderDataType[]
     * $encryptedSharedFolderDataCollection
     */
    protected $encryptedSharedFolderDataCollection = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\InvalidRecipientType[] $invalidRecipients
     */
    protected $invalidRecipients = null;
}
