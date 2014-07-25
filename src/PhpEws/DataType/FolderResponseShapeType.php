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
     * @var EWSType_DefaultShapeNamesType
     */
    public $BaseShape;

    /**
     * AdditionalProperties property
     *
     * @var EWSType_NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
