<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetAttachmentType
 *
 *
 * XSD Type: GetAttachmentType
 *
 * @method \jamesiarmes\PEWS\API\Type\AttachmentResponseShapeType getAttachmentShape()
 * @method GetAttachmentType setAttachmentShape(\jamesiarmes\PEWS\API\Type\AttachmentResponseShapeType $attachmentShape)
 * @method array getAttachmentIds()
 * @method GetAttachmentType setAttachmentIds(array $attachmentIds)
 */
class GetAttachmentType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\AttachmentResponseShapeType
     */
    protected $attachmentShape = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RequestAttachmentIdType[]
     */
    protected $attachmentIds = null;
}
