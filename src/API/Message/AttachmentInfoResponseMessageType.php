<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing AttachmentInfoResponseMessageType
 *
 *
 * XSD Type: AttachmentInfoResponseMessageType
 *
 * @method AttachmentInfoResponseMessageType getAttachments()
 * @method AttachmentInfoResponseMessageType setAttachments(\jamesiarmes\PEWS\API\Type\ArrayOfAttachmentsType $attachments)
 */
class AttachmentInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ArrayOfAttachmentsType $attachments
     */
    protected $attachments = null;
}
