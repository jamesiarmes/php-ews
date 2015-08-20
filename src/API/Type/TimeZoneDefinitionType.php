<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing TimeZoneDefinitionType
 *
 *
 * XSD Type: TimeZoneDefinitionType
 *
 * @method string getId()
 * @method TimeZoneDefinitionType setId(string $id)
 * @method string getName()
 * @method TimeZoneDefinitionType setName(string $name)
 * @method array getPeriods()
 * @method TimeZoneDefinitionType setPeriods(array $periods)
 * @method array getTransitionsGroups()
 * @method TimeZoneDefinitionType setTransitionsGroups(array $transitionsGroups)
 * @method ArrayOfTransitionsType getTransitions()
 * @method TimeZoneDefinitionType setTransitions(ArrayOfTransitionsType $transitions)
 */
class TimeZoneDefinitionType extends Type
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\PeriodType[]
     */
    protected $periods = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfTransitionsType[]
     */
    protected $transitionsGroups = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfTransitionsType
     */
    protected $transitions = null;
}
