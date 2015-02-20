<?php
/**
 * Contains ArrayOfTimeZoneDefinitionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of time zone definitions.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfTimeZoneDefinitionType extends EWSType
{
    /**
     * Specifies the periods and transitions that define a time zone.
     *
     * @since Exchange 2010
     *
     * @var TimeZoneDefinitionType
     */
    public $TimeZoneDefinition;
}
