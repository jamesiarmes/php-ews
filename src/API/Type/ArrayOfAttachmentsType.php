<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfAttachmentsType
 *
 *
 * XSD Type: ArrayOfAttachmentsType
 *
 * @method ArrayOfAttachmentsType getItemAttachment()
 * @method ArrayOfAttachmentsType setItemAttachment(array $itemAttachment)
 * @method ArrayOfAttachmentsType getFileAttachment()
 * @method ArrayOfAttachmentsType setFileAttachment(array $fileAttachment)
 */
class ArrayOfAttachmentsType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemAttachmentType[] $itemAttachment
     */
    protected $itemAttachment = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\FileAttachmentType[] $fileAttachment
     */
    protected $fileAttachment = null;
}
