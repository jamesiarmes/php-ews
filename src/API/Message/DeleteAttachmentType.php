<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing DeleteAttachmentType
 *
 *
 * XSD Type: DeleteAttachmentType
 *
 * @method DeleteAttachmentType getAttachmentIds()
 * @method DeleteAttachmentType setAttachmentIds(array $attachmentIds)
 */
class DeleteAttachmentType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\RequestAttachmentIdType[] $attachmentIds
     */
    protected $attachmentIds = null;
}
