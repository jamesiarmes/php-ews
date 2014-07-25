<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the ExtendedPropertyType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ExtendedPropertyType type
 */
class ExtendedPropertyType extends DataType
{
    /**
     * ExtendedFieldURI property
     *
     * @var EWSType_PathToExtendedFieldType
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
     * @var EWSType_NonEmptyArrayOfPropertyValuesType
     */
    public $Values;
}
