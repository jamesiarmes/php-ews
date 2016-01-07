<?php
/**
 * Contains EWSType_ArrayOfTimeZoneDefinitionType.
 */

/**
 * Represents an array of time zone definitions.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfTimeZoneDefinitionType extends EWSType
{
    /**
     * Specifies the periods and transitions that define a time zone.
     *
     * @since Exchange 2010
     *
     * @var EWSType_TimeZoneDefinitionType
     */
    public $TimeZoneDefinition;
}
