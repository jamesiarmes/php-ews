<?php
/**
 * Definition of the ExtendedPropertyType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ExtendedPropertyType type
 */
class EWSType_ExtendedPropertyType extends EWSType
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
