<?php
/**
 * Definition of the AbsoluteMonthlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AbsoluteMonthlyRecurrencePatternType type
 */
class EWSType_AbsoluteMonthlyRecurrencePatternType extends EWSType
{
    /**
     * DayOfMonth property
     *
     * @var integer
     */
    public $DayOfMonth;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DayOfMonth',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
