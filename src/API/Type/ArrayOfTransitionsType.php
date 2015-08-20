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
 * @method array getAbsoluteDateTransition()
 * @method ArrayOfTransitionsType setAbsoluteDateTransition(array $absoluteDateTransition)
 * @method array getRecurringDayTransition()
 * @method ArrayOfTransitionsType setRecurringDayTransition(array $recurringDayTransition)
 * @method array getRecurringDateTransition()
 * @method ArrayOfTransitionsType setRecurringDateTransition(array $recurringDateTransition)
 * @method array getTransition()
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
