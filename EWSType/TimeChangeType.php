<?php
/**
 * Definition of the TimeChangeType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the TimeChangeType type
 */
class EWSType_TimeChangeType extends EWSType
{
    /**
     * Offset property
     *
     * @var EWSType_duration
     */
    public $Offset;

    /**
     * RelativeYearlyRecurrence property
     *
     * @var EWSType_RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * AbsoluteDate property
     *
     * @var EWSType_date
     */
    public $AbsoluteDate;

    /**
     * Time property
     *
     * @var EWSType_time
     */
    public $Time;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Offset',
                'required' => false,
                'type' => 'duration',
            ),
            array(
                'name' => 'RelativeYearlyRecurrence',
                'required' => false,
                'type' => 'RelativeYearlyRecurrencePatternType',
            ),
            array(
                'name' => 'AbsoluteDate',
                'required' => false,
                'type' => 'date',
            ),
            array(
                'name' => 'Time',
                'required' => false,
                'type' => 'time',
            ),
            array(
                'name' => 'TimeZoneName',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
