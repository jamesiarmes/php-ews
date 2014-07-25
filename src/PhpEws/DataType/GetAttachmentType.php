<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the GetAttachmentType type
 */
class GetAttachmentType extends DataType
{
    /**
     * AttachmentShape property
     *
     * @var AttachmentResponseShapeType
     */
    public $AttachmentShape;

    /**
     * AttachmentIds property
     *
     * @var NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
