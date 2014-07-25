<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the CreateAttachmentType type
 */
class CreateAttachmentType extends DataType
{
    /**
     * ParentItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ParentItemId;

    /**
     * Attachments property
     *
     * @var EWSType_NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
}
