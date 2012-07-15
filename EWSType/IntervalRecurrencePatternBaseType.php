<?php
/**
 * Definition of the IntervalRecurrencePatternBaseType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the IntervalRecurrencePatternBaseType type
 */
class EWSType_IntervalRecurrencePatternBaseType extends EWSType
{
    /**
     * Interval property
     *
     * @var integer
     */
    public $Interval;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Interval',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
