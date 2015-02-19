<?php
/**
 * Contains EWSType_ArrayOfTimeZoneDefinitionType.
 */

/**
 * Represents an array of time zone definitions.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfTimeZoneDefinitionType extends EWSType
{
    /**
     * Specifies the periods and transitions that define a time zone.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\TimeZoneDefinitionType
     */
    public $TimeZoneDefinition;
}
