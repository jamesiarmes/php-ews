<?php
/**
 * Definition of the TimeChangeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the TimeChangeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_TimeChangeType extends EWSType {
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
	public function __construct() {
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
		); // end $this->schema
	} // end function __construct()
} // end class TimeChangeType