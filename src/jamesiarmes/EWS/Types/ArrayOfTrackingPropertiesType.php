<?php
/**
 * Contains ArrayOfTrackingPropertiesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a list of one or more tracking properties.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfTrackingPropertiesType extends EWSType
{
    /**
     * Represents a name and value pair of strings that is used to create
     * properties for message tracking reports.
     *
     * @since Exchange 2010 SP1
     *
     * @var TrackingPropertyType
     */
    public $TrackingPropertyType;
}
