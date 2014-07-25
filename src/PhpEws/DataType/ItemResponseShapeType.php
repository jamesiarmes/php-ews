<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ItemResponseShapeType type
 */
class ItemResponseShapeType extends DataType
{
    /**
     * BaseShape property
     *
     * @var EWSType_DefaultShapeNamesType
     */
    public $BaseShape;

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
