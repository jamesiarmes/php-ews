<?php

namespace jamesiarmes\PEWS\API\Messages;

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
     * @property \jamesiarmes\PEWS\API\TypeTest\EncryptedSharedFolderDataType[]
     * $encryptedSharedFolderDataCollection
     */
    protected $encryptedSharedFolderDataCollection = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\InvalidRecipientType[]
     * $invalidRecipients
     */
    protected $invalidRecipients = null;


}

