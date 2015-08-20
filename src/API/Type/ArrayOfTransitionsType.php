<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfTransitionsType
 *
 *
 * XSD Type: ArrayOfTransitionsType
 *
 * @method ArrayOfTransitionsType getId()
 * @method ArrayOfTransitionsType setId(string $id)
 * @method ArrayOfTransitionsType getAbsoluteDateTransition()
 * @method ArrayOfTransitionsType setAbsoluteDateTransition(array $absoluteDateTransition)
 * @method ArrayOfTransitionsType getRecurringDayTransition()
 * @method ArrayOfTransitionsType setRecurringDayTransition(array $recurringDayTransition)
 * @method ArrayOfTransitionsType getRecurringDateTransition()
 * @method ArrayOfTransitionsType setRecurringDateTransition(array $recurringDateTransition)
 * @method ArrayOfTransitionsType getTransition()
 * @method ArrayOfTransitionsType setTransition(array $transition)
 */
class ArrayOfTransitionsType extends Type
{

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AbsoluteDateTransition[]
     * $absoluteDateTransition
     */
    protected $absoluteDateTransition = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RecurringDayTransition[]
     * $recurringDayTransition
     */
    protected $recurringDayTransition = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RecurringDateTransition[]
     * $recurringDateTransition
     */
    protected $recurringDateTransition = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\Transition[] $transition
     */
    protected $transition = null;


}

