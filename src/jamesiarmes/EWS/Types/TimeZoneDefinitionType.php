<?php
/**
 * Contains TimeZoneDefinitionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a timezone.
 *
 * @package jamesiarmes\EWS\Types
 */
class TimeZoneDefinitionType extends EWSType
{
    /**
     * Unique identifier of the time zone definition.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Id;

    /**
     * Descriptive name of the time zone definition.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Name;

    /**
     * Array of Period elements that define the time offset at different stages
     * of the time zone.
     *
     * @since Exchange 2010
     *
     * @var NonEmptyArrayOfPeriodsType
     */
    public $Periods;

    /**
     * Array of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfTransitionsType
     */
    public $Transitions;

    /**
     * Array of TransitionsGroup elements that specify time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfTransitionsGroupsType
     */
    public $TransitionsGroups;
}
