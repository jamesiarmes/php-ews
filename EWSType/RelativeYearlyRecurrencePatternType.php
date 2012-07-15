<?php
/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 */
class EWSType_RelativeYearlyRecurrencePatternType extends EWSType
{
    /**
     * DaysOfWeek property
     *
     * @var EWSType_DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * DayOfWeekIndex property
     *
     * @var EWSType_DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Month property
     *
     * @var EWSType_MonthNamesType
     */
    public $Month;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DaysOfWeek',
                'required' => false,
                'type' => 'DayOfWeekType',
            ),
            array(
                'name' => 'DayOfWeekIndex',
                'required' => false,
                'type' => 'DayOfWeekIndexType',
            ),
            array(
                'name' => 'Month',
                'required' => false,
                'type' => 'MonthNamesType',
            ),
        );
    }
}
