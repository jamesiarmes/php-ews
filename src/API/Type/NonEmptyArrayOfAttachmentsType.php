<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfAttachmentsType
 *
 *
 * XSD Type: NonEmptyArrayOfAttachmentsType
 *
 * @method NonEmptyArrayOfAttachmentsType addItemAttachment(ItemAttachmentType $itemAttachment)
 * @method ItemAttachmentType[] getItemAttachment()
 * @method NonEmptyArrayOfAttachmentsType setItemAttachment(array $itemAttachment)
 * @method NonEmptyArrayOfAttachmentsType addFileAttachment(FileAttachmentType $fileAttachment)
 * @method FileAttachmentType[] getFileAttachment()
 * @method NonEmptyArrayOfAttachmentsType setFileAttachment(array $fileAttachment)
 */
class NonEmptyArrayOfAttachmentsType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemAttachmentType[]
     */
    protected $itemAttachment = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FileAttachmentType[]
     */
    protected $fileAttachment = null;
}
