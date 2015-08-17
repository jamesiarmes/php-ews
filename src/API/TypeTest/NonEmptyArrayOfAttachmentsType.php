<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing NonEmptyArrayOfAttachmentsType
 *
 *
 * XSD Type: NonEmptyArrayOfAttachmentsType
 *
 * @method NonEmptyArrayOfAttachmentsType getItemAttachment()
 * @method NonEmptyArrayOfAttachmentsType setItemAttachment(array $itemAttachment)
 * @method NonEmptyArrayOfAttachmentsType getFileAttachment()
 * @method NonEmptyArrayOfAttachmentsType setFileAttachment(array $fileAttachment)
 */
class NonEmptyArrayOfAttachmentsType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemAttachmentType[] $itemAttachment
     */
    protected $itemAttachment = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FileAttachmentType[] $fileAttachment
     */
    protected $fileAttachment = null;


}

