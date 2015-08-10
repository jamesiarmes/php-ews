<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetSharingMetadataResponseMessageType
 *
 *
 * XSD Type: GetSharingMetadataResponseMessageType
 *
 * @method GetSharingMetadataResponseMessageType
 * getEncryptedSharedFolderDataCollection()
 * @method GetSharingMetadataResponseMessageType
 * setEncryptedSharedFolderDataCollection($encryptedSharedFolderDataCollection)
 * @method GetSharingMetadataResponseMessageType getInvalidRecipients()
 * @method GetSharingMetadataResponseMessageType
 * setInvalidRecipients($invalidRecipients)
 */
class GetSharingMetadataResponseMessageType extends ResponseMessageType
{

    /**
     * @property array $encryptedSharedFolderDataCollection
     */
    protected $encryptedSharedFolderDataCollection = null;

    /**
     * @property array $invalidRecipients
     */
    protected $invalidRecipients = null;


}

