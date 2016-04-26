<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing CreateAttachmentType
 *
 *
 * XSD Type: CreateAttachmentType
 *
 * @method \jamesiarmes\PEWS\API\Type\ItemIdType getParentItemId()
 * @method CreateAttachmentType setParentItemId(\jamesiarmes\PEWS\API\Type\ItemIdType $parentItemId)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAttachmentsType getAttachments()
 * @method CreateAttachmentType setAttachments(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAttachmentsType $attachments)
 */
class CreateAttachmentType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $parentItemId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAttachmentsType
     */
    protected $attachments = null;
}
