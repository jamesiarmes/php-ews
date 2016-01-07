<?php
/**
 * Contains EWSType_ArrayOfArraysOfTrackingPropertiesType.
 */

/**
 * Represents a property bag to store errors that are returned through the Web
 * service.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfArraysOfTrackingPropertiesType extends EWSType
{

    /**
     * Contains a list of one or more tracking properties.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfTrackingPropertiesType
     */
    public $Properties;
}
