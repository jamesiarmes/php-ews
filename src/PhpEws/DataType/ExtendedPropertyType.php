<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ExtendedPropertyType type
 */
class ExtendedPropertyType extends DataType
{
    /**
     * ExtendedFieldURI property
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Value property
     *
     * @var string
     */
    public $Value;

    /**
     * Values property
     *
     * @var NonEmptyArrayOfPropertyValuesType
     */
    public $Values;
}
