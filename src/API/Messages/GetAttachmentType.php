<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetAttachmentType
 *
 *
 * XSD Type: GetAttachmentType
 *
 * @method GetAttachmentType getAttachmentShape()
 * @method GetAttachmentType setAttachmentShape(\jamesiarmes\PEWS\API\TypeTest\AttachmentResponseShapeType $attachmentShape)
 * @method GetAttachmentType getAttachmentIds()
 * @method GetAttachmentType setAttachmentIds(array $attachmentIds)
 */
class GetAttachmentType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AttachmentResponseShapeType
     * $attachmentShape
     */
    protected $attachmentShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RequestAttachmentIdType[]
     * $attachmentIds
     */
    protected $attachmentIds = null;


}

