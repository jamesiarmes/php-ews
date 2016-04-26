<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing AttachmentInfoResponseMessageType
 *
 *
 * XSD Type: AttachmentInfoResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\ArrayOfAttachmentsType getAttachments()
 * @method AttachmentInfoResponseMessageType setAttachments(\jamesiarmes\PEWS\API\Type\ArrayOfAttachmentsType $attachments)
 */
class AttachmentInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfAttachmentsType
     */
    protected $attachments = null;
}
