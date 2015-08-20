<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing RecurringDayTransitionType
 *
 *
 * XSD Type: RecurringDayTransitionType
 *
 * @method RecurringDayTransitionType getDayOfWeek()
 * @method RecurringDayTransitionType setDayOfWeek(string $dayOfWeek)
 * @method RecurringDayTransitionType getOccurrence()
 * @method RecurringDayTransitionType setOccurrence(string $occurrence)
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
