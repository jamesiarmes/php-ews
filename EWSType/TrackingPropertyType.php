<?php
/**
 * Contains EWSType_TrackingPropertyType.
 */

/**
 * Represents a name and value pair of strings that is used to create properties
 * for message tracking reports.
 *
 * @package php-ews\Types
 */
class EWSType_TrackingPropertyType extends EWSType
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
