<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfAttachmentsType
 *
 *
 * XSD Type: ArrayOfAttachmentsType
 *
 * @method array getItemAttachment()
 * @method ArrayOfAttachmentsType setItemAttachment(array $itemAttachment)
 * @method array getFileAttachment()
 * @method ArrayOfAttachmentsType setFileAttachment(array $fileAttachment)
 */
class ArrayOfAttachmentsType extends Type
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
