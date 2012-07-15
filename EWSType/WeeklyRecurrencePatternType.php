<?php
/**
 * Definition of the WeeklyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the WeeklyRecurrencePatternType type
 */
class EWSType_WeeklyRecurrencePatternType extends EWSType
{
    /**
     * DaysOfWeek property
     *
     * @var EWSType_DaysOfWeekType
     */
    public $DaysOfWeek;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DaysOfWeek',
                'required' => false,
                'type' => 'DaysOfWeekType',
            ),
        );
    }
}
