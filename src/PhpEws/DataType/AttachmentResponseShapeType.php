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
     * @var BodyTypeResponseType
     */
    public $BodyType;

    /**
     * AdditionalProperties property
     *
     * @var NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
