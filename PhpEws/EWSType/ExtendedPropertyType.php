<?php
/**
 * Definition of the ExtendedPropertyType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ExtendedPropertyType type
 */
class ExtendedPropertyType extends PhpEws\EWSType
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
