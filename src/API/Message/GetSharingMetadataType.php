<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetSharingMetadataType
 *
 *
 * XSD Type: GetSharingMetadataType
 *
 * @method \jamesiarmes\PEWS\API\Type\FolderIdType getIdOfFolderToShare()
 * @method GetSharingMetadataType setIdOfFolderToShare(\jamesiarmes\PEWS\API\Type\FolderIdType $idOfFolderToShare)
 * @method string getSenderSmtpAddress()
 * @method GetSharingMetadataType setSenderSmtpAddress(string $senderSmtpAddress)
 * @method array getRecipients()
 * @method GetSharingMetadataType setRecipients(array $recipients)
 */
class GetSharingMetadataType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $idOfFolderToShare = null;

    /**
     * @var string
     */
    protected $senderSmtpAddress = null;

    /**
     * @var string[]
     */
    protected $recipients = null;
}
