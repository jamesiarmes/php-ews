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
     * @var ItemIdType
     */
    public $ParentItemId;

    /**
     * Attachments property
     *
     * @var NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
}
