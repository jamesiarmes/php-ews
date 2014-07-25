<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FolderResponseShapeType type
 */
class FolderResponseShapeType extends DataType
{
    /**
     * BaseShape property
     *
     * @var DefaultShapeNamesType
     */
    public $BaseShape;

    /**
     * AdditionalProperties property
     *
     * @var NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
