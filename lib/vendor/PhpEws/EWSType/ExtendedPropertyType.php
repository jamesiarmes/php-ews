<?php
/**
 * Definition of the ExtendedPropertyType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ExtendedPropertyType type
 */
class ExtendedPropertyType extends EWSType
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
