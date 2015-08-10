<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetSharingMetadataType
 *
 *
 * XSD Type: GetSharingMetadataType
 *
 * @method GetSharingMetadataType getIdOfFolderToShare()
 * @method GetSharingMetadataType setIdOfFolderToShare($idOfFolderToShare)
 * @method GetSharingMetadataType getSenderSmtpAddress()
 * @method GetSharingMetadataType setSenderSmtpAddress($senderSmtpAddress)
 * @method GetSharingMetadataType getRecipients()
 * @method GetSharingMetadataType setRecipients($recipients)
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
     * @property array $recipients
     */
    protected $recipients = null;


}

