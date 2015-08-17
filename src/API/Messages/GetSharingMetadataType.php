<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetSharingMetadataType
 *
 *
 * XSD Type: GetSharingMetadataType
 *
 * @method GetSharingMetadataType getIdOfFolderToShare()
 * @method GetSharingMetadataType setIdOfFolderToShare(\jamesiarmes\PEWS\API\TypeTest\FolderIdType $idOfFolderToShare)
 * @method GetSharingMetadataType getSenderSmtpAddress()
 * @method GetSharingMetadataType setSenderSmtpAddress(string $senderSmtpAddress)
 * @method GetSharingMetadataType getRecipients()
 * @method GetSharingMetadataType setRecipients(array $recipients)
 */
class GetSharingMetadataType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType $idOfFolderToShare
     */
    protected $idOfFolderToShare = null;

    /**
     * @property string $senderSmtpAddress
     */
    protected $senderSmtpAddress = null;

    /**
     * @property string[] $recipients
     */
    protected $recipients = null;


}

