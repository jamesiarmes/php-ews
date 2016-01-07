<?php
/**
 * Contains EWSType_TimeZoneDefinitionType.
 */

/**
 * Defines a timezone.
 *
 * @package php-ews\Types
 */
class EWSType_TimeZoneDefinitionType extends EWSType
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
     * @var EWSType_NonEmptyArrayOfPeriodsType
     */
    public $Periods;

    /**
     * Array of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfTransitionsType
     */
    public $Transitions;

    /**
     * Array of TransitionsGroup elements that specify time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfTransitionsGroupsType
     */
    public $TransitionsGroups;
}
