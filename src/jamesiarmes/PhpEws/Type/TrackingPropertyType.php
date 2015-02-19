<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\TrackingPropertyType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a name and value pair of strings that is used to create properties
 * for message tracking reports.
 *
 * @package php-ews\Type
 */
class TrackingPropertyType extends Type
{
    /**
     * Defines a name for the message tracking report property.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $Name;

    /**
     * Defines a value for the message tracking report property.
     *
     * This element is optional.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $Value;
}
