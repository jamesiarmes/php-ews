<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetAttachmentType
 *
 *
 * XSD Type: GetAttachmentType
 *
 * @method GetAttachmentType getAttachmentShape()
 * @method GetAttachmentType setAttachmentShape($attachmentShape)
 * @method GetAttachmentType getAttachmentIds()
 * @method GetAttachmentType setAttachmentIds($attachmentIds)
 */
class GetAttachmentType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AttachmentResponseShapeType
     * $attachmentShape
     */
    protected $attachmentShape = null;

    /**
     * @property array $attachmentIds
     */
    protected $attachmentIds = null;


}

