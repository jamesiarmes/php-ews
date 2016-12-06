<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfTimeZoneDefinitionType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of time zone definitions.
 *
 * @package php-ews\Array
 */
class ArrayOfTimeZoneDefinitionType extends ArrayType
{
    /**
     * Specifies the periods and transitions that define a time zone.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\TimeZoneDefinitionType[]
     */
    public $TimeZoneDefinition = array();
}
