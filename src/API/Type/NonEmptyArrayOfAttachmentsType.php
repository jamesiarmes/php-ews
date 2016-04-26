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

    /**
     * @return FileAttachmentType[]
     */
    public function getFileAttachment()
    {
        if (!is_array($this->fileAttachment) && $this->fileAttachment !== null) {
            return array($this->fileAttachment);
        }

        return $this->fileAttachment;
    }

    /**
     * @return ItemAttachmentType[]
     */
    public function getItemAttachment()
    {
        if (!is_array($this->itemAttachment) && $this->itemAttachment !== null) {
            return array($this->itemAttachment);
        }

        return $this->itemAttachment;
    }
}
