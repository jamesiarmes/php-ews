<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the NonEmptyArrayOfAttachmentsType type
 */
class NonEmptyArrayOfAttachmentsType extends DataType
{
    /**
     * ItemAttachment property
     *
     * @var EWSType_ItemAttachmentType
     */
    public $ItemAttachment;

    /**
     * FileAttachment property
     *
     * @var EWSType_FileAttachmentType
     */
    public $FileAttachment;
}
