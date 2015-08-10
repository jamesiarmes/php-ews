<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfAttachmentsType
 *
 *
 * XSD Type: NonEmptyArrayOfAttachmentsType
 *
 * @method NonEmptyArrayOfAttachmentsType getItemAttachment()
 * @method NonEmptyArrayOfAttachmentsType setItemAttachment($itemAttachment)
 * @method NonEmptyArrayOfAttachmentsType getFileAttachment()
 * @method NonEmptyArrayOfAttachmentsType setFileAttachment($fileAttachment)
 */
class NonEmptyArrayOfAttachmentsType extends Type
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

