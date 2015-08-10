<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing TimeZoneDefinitionType
 *
 *
 * XSD Type: TimeZoneDefinitionType
 *
 * @method TimeZoneDefinitionType getId()
 * @method TimeZoneDefinitionType setId($id)
 * @method TimeZoneDefinitionType getName()
 * @method TimeZoneDefinitionType setName($name)
 * @method TimeZoneDefinitionType getPeriods()
 * @method TimeZoneDefinitionType setPeriods($periods)
 * @method TimeZoneDefinitionType getTransitionsGroups()
 * @method TimeZoneDefinitionType setTransitionsGroups($transitionsGroups)
 * @method TimeZoneDefinitionType getTransitions()
 * @method TimeZoneDefinitionType setTransitions($transitions)
 */
class TimeZoneDefinitionType extends Type
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
     * @property array $periods
     */
    protected $periods = null;

    /**
     * @property array $transitionsGroups
     */
    protected $transitionsGroups = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ArrayOfTransitionsType $transitions
     */
    protected $transitions = null;


}

