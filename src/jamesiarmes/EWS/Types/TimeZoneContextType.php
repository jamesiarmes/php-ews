<?php
/**
 * Contains TimeZoneContextType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the time zone definition that is to be used as the default when
 * assigning the time zone for the DateTime properties of objects that are
 * created, updated, and retrieved by using Exchange Web Services (EWS).
 *
 * @package jamesiarmes\EWS\Types
 */
class TimeZoneContextType extends EWSType
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
