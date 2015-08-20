<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetAttachmentType
 *
 *
 * XSD Type: GetAttachmentType
 *
 * @method GetAttachmentType getAttachmentShape()
 * @method GetAttachmentType setAttachmentShape(\jamesiarmes\PEWS\API\Type\AttachmentResponseShapeType $attachmentShape)
 * @method GetAttachmentType getAttachmentIds()
 * @method GetAttachmentType setAttachmentIds(array $attachmentIds)
 */
class GetAttachmentType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\AttachmentResponseShapeType
     * $attachmentShape
     */
    protected $attachmentShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RequestAttachmentIdType[] $attachmentIds
     */
    protected $attachmentIds = null;
}
