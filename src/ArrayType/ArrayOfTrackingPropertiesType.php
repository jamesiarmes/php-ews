<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfTrackingPropertiesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a list of one or more tracking properties.
 *
 * @package php-ews\Array
 */
class ArrayOfTrackingPropertiesType extends ArrayType
{
    /**
     * Represents a name and value pair of strings that is used to create
     * properties for message tracking reports.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\TrackingPropertyType[]
     */
    public $TrackingPropertyType = array();
}
