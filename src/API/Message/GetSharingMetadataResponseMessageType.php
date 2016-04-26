<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetSharingMetadataResponseMessageType
 *
 *
 * XSD Type: GetSharingMetadataResponseMessageType
 *
 * @method GetSharingMetadataResponseMessageType addEncryptedSharedFolderDataCollection(\jamesiarmes\PEWS\API\Type\EncryptedSharedFolderDataType $encryptedSharedFolderDataCollection)
 * @method \jamesiarmes\PEWS\API\Type\EncryptedSharedFolderDataType[] getEncryptedSharedFolderDataCollection()
 * @method GetSharingMetadataResponseMessageType setEncryptedSharedFolderDataCollection(array $encryptedSharedFolderDataCollection)
 * @method GetSharingMetadataResponseMessageType addInvalidRecipients(\jamesiarmes\PEWS\API\Type\InvalidRecipientType $invalidRecipients)
 * @method \jamesiarmes\PEWS\API\Type\InvalidRecipientType[] getInvalidRecipients()
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
