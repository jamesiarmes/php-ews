<?php
/**
 * Contains EWSType_ArrayOfTrackingPropertiesType.
 */

/**
 * Represents a list of one or more tracking properties.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfTrackingPropertiesType extends EWSType
{
    /**
     * Represents a name and value pair of strings that is used to create
     * properties for message tracking reports.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_TrackingPropertyType
     */
    public $TrackingPropertyType;
}
