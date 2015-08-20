<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing DeleteAttachmentType
 *
 *
 * XSD Type: DeleteAttachmentType
 *
 * @method array getAttachmentIds()
 * @method DeleteAttachmentType setAttachmentIds(array $attachmentIds)
 */
class DeleteAttachmentType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\RequestAttachmentIdType[]
     */
    protected $attachmentIds = null;
}
