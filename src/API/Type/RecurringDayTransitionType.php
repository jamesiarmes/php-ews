<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing RecurringDayTransitionType
 *
 *
 * XSD Type: RecurringDayTransitionType
 *
 * @method string getDayOfWeek()
 * @method RecurringDayTransitionType setDayOfWeek(string $dayOfWeek)
 * @method string getOccurrence()
 * @method RecurringDayTransitionType setOccurrence(string $occurrence)
 */
class RecurringDayTransitionType extends RecurringTimeTransitionType
{

    /**
     * @var string
     */
    protected $dayOfWeek = null;

    /**
     * @var string
     */
    protected $occurrence = null;
}
