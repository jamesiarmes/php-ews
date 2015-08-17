<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing TimeZoneDefinitionType
 *
 *
 * XSD Type: TimeZoneDefinitionType
 *
 * @method TimeZoneDefinitionType getId()
 * @method TimeZoneDefinitionType setId(string $id)
 * @method TimeZoneDefinitionType getName()
 * @method TimeZoneDefinitionType setName(string $name)
 * @method TimeZoneDefinitionType getPeriods()
 * @method TimeZoneDefinitionType setPeriods(array $periods)
 * @method TimeZoneDefinitionType getTransitionsGroups()
 * @method TimeZoneDefinitionType setTransitionsGroups(array $transitionsGroups)
 * @method TimeZoneDefinitionType getTransitions()
 * @method TimeZoneDefinitionType setTransitions(ArrayOfTransitionsType $transitions)
 */
class TimeZoneDefinitionType extends TypeTest
{

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * @property string $name
     */
    protected $name = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\PeriodType[] $periods
     */
    protected $periods = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ArrayOfTransitionsType[]
     * $transitionsGroups
     */
    protected $transitionsGroups = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ArrayOfTransitionsType $transitions
     */
    protected $transitions = null;


}

