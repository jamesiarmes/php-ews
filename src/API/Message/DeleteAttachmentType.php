<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing DeleteAttachmentType
 *
 *
 * XSD Type: DeleteAttachmentType
 *
 * @method DeleteAttachmentType addAttachmentIds(\jamesiarmes\PEWS\API\Type\RequestAttachmentIdType $attachmentIds)
 * @method \jamesiarmes\PEWS\API\Type\RequestAttachmentIdType[] getAttachmentIds()
 * @method DeleteAttachmentType setAttachmentIds(array $attachmentIds)
 */
class DeleteAttachmentType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\RequestAttachmentIdType[]
     */
    protected $attachmentIds = null;
}
