<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfTransitionsType
 *
 *
 * XSD Type: ArrayOfTransitionsType
 *
 * @method string getId()
 * @method ArrayOfTransitionsType setId(string $id)
 * @method ArrayOfTransitionsType addAbsoluteDateTransition(AbsoluteDateTransition $absoluteDateTransition)
 * @method AbsoluteDateTransition[] getAbsoluteDateTransition()
 * @method ArrayOfTransitionsType setAbsoluteDateTransition(array $absoluteDateTransition)
 * @method ArrayOfTransitionsType addRecurringDayTransition(RecurringDayTransition $recurringDayTransition)
 * @method RecurringDayTransition[] getRecurringDayTransition()
 * @method ArrayOfTransitionsType setRecurringDayTransition(array $recurringDayTransition)
 * @method ArrayOfTransitionsType addRecurringDateTransition(RecurringDateTransition $recurringDateTransition)
 * @method RecurringDateTransition[] getRecurringDateTransition()
 * @method ArrayOfTransitionsType setRecurringDateTransition(array $recurringDateTransition)
 * @method ArrayOfTransitionsType addTransition(Transition $transition)
 * @method Transition[] getTransition()
 * @method ArrayOfTransitionsType setTransition(array $transition)
 */
class ArrayOfTransitionsType extends Type
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AbsoluteDateTransition[]
     */
    protected $absoluteDateTransition = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RecurringDayTransition[]
     */
    protected $recurringDayTransition = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RecurringDateTransition[]
     */
    protected $recurringDateTransition = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\Transition[]
     */
    protected $transition = null;
}
