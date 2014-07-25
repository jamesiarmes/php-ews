<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the PathToIndexedFieldType type
 */
class PathToIndexedFieldType extends DataType
{
    /**
     * FieldURI property
     *
     * @var EWSType_DictionaryURIType
     */
    public $FieldURI;

    /**
     * FieldIndex property
     *
     * @var string
     */
    public $FieldIndex;
}
