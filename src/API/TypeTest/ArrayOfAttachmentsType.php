<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfAttachmentsType
 *
 *
 * XSD Type: ArrayOfAttachmentsType
 *
 * @method ArrayOfAttachmentsType getItemAttachment()
 * @method ArrayOfAttachmentsType setItemAttachment($itemAttachment)
 * @method ArrayOfAttachmentsType getFileAttachment()
 * @method ArrayOfAttachmentsType setFileAttachment($fileAttachment)
 */
class ArrayOfAttachmentsType extends Type
{

    /**
     * @property array $itemAttachment
     */
    protected $itemAttachment = null;

    /**
     * @property array $fileAttachment
     */
    protected $fileAttachment = null;


}

