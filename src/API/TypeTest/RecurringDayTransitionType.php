<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing RecurringDayTransitionType
 *
 *
 * XSD Type: RecurringDayTransitionType
 *
 * @method RecurringDayTransitionType getDayOfWeek()
 * @method RecurringDayTransitionType setDayOfWeek($dayOfWeek)
 * @method RecurringDayTransitionType getOccurrence()
 * @method RecurringDayTransitionType setOccurrence($occurrence)
 */
class RecurringDayTransitionType extends RecurringTimeTransitionType
{

    /**
     * @property string $dayOfWeek
     */
    protected $dayOfWeek = null;

    /**
     * @property string $occurrence
     */
    protected $occurrence = null;


}

