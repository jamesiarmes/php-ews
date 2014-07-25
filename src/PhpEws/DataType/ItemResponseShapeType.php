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
     * @var DefaultShapeNamesType
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
