<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class ArrayOfTransitionsType extends TypeTest
{

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AbsoluteDateTransition[]
     * $absoluteDateTransition
     */
    protected $absoluteDateTransition = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RecurringDayTransition[]
     * $recurringDayTransition
     */
    protected $recurringDayTransition = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RecurringDateTransition[]
     * $recurringDateTransition
     */
    protected $recurringDateTransition = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\Transition[] $transition
     */
    protected $transition = null;


}

