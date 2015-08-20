<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing CreateAttachmentType
 *
 *
 * XSD Type: CreateAttachmentType
 *
 * @method CreateAttachmentType getParentItemId()
 * @method CreateAttachmentType setParentItemId(\jamesiarmes\PEWS\API\Type\ItemIdType $parentItemId)
 * @method CreateAttachmentType getAttachments()
 * @method CreateAttachmentType setAttachments(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAttachmentsType $attachments)
 */
class CreateAttachmentType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $parentItemId
     */
    protected $parentItemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAttachmentsType $attachments
     */
    protected $attachments = null;


}

