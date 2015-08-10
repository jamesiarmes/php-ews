<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfTransitionsType
 *
 *
 * XSD Type: ArrayOfTransitionsType
 *
 * @method ArrayOfTransitionsType getId()
 * @method ArrayOfTransitionsType setId($id)
 * @method ArrayOfTransitionsType getAbsoluteDateTransition()
 * @method ArrayOfTransitionsType
 * setAbsoluteDateTransition($absoluteDateTransition)
 * @method ArrayOfTransitionsType getRecurringDayTransition()
 * @method ArrayOfTransitionsType
 * setRecurringDayTransition($recurringDayTransition)
 * @method ArrayOfTransitionsType getRecurringDateTransition()
 * @method ArrayOfTransitionsType
 * setRecurringDateTransition($recurringDateTransition)
 * @method ArrayOfTransitionsType getTransition()
 * @method ArrayOfTransitionsType setTransition($transition)
 */
class ArrayOfTransitionsType extends Type
{

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * @property array $absoluteDateTransition
     */
    protected $absoluteDateTransition = null;

    /**
     * @property array $recurringDayTransition
     */
    protected $recurringDayTransition = null;

    /**
     * @property array $recurringDateTransition
     */
    protected $recurringDateTransition = null;

    /**
     * @property array $transition
     */
    protected $transition = null;


}

