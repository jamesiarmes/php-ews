<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the AttachmentResponseShapeType type
 */
class AttachmentResponseShapeType extends DataType
{
    /**
     * IncludeMimeContent property
     *
     * @var boolean
     */
    public $IncludeMimeContent;

    /**
     * BodyType property
     *
     * @var EWSType_BodyTypeResponseType
     */
    public $BodyType;

    /**
     * AdditionalProperties property
     *
     * @var EWSType_NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
