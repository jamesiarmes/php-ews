<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\TimeZoneDefinitionType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines a timezone.
 *
 * @package php-ews\Type
 */
class TimeZoneDefinitionType extends Type
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
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfPeriodsType
     */
    public $Periods;

    /**
     * Array of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfTransitionsType
     */
    public $Transitions;

    /**
     * Array of TransitionsGroup elements that specify time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfTransitionsGroupsType
     */
    public $TransitionsGroups;
}
