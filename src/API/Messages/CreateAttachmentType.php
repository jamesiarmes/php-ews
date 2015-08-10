<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing CreateAttachmentType
 *
 *
 * XSD Type: CreateAttachmentType
 *
 * @method CreateAttachmentType getParentItemId()
 * @method CreateAttachmentType setParentItemId($parentItemId)
 * @method CreateAttachmentType getAttachments()
 * @method CreateAttachmentType setAttachments($attachments)
 */
class CreateAttachmentType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $parentItemId
     */
    protected $parentItemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfAttachmentsType
     * $attachments
     */
    protected $attachments = null;


}

