<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing CreateAttachmentType
 *
 *
 * XSD Type: CreateAttachmentType
 *
 * @method CreateAttachmentType getParentItemId()
 * @method CreateAttachmentType setParentItemId(\jamesiarmes\PEWS\API\TypeTest\ItemIdType $parentItemId)
 * @method CreateAttachmentType getAttachments()
 * @method CreateAttachmentType setAttachments(\jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfAttachmentsType $attachments)
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

