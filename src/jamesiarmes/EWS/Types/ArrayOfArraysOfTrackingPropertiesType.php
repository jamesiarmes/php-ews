<?php
/**
 * Contains ArrayOfArraysOfTrackingPropertiesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a property bag to store errors that are returned through the Web
 * service.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfArraysOfTrackingPropertiesType extends EWSType
{

    /**
     * Contains a list of one or more tracking properties.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfTrackingPropertiesType
     */
    public $Properties;
}
