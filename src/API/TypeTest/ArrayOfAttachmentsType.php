<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class ArrayOfAttachmentsType extends TypeTest
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

