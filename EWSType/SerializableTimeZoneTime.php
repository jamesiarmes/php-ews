<?php
/**
 * Definition of the SerializableTimeZoneTime type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SerializableTimeZoneTime type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SerializableTimeZoneTime extends EWSType {
	/**
	 * Bias property
	 * 
	 * @var EWSType_int
	 */
	public $Bias;

	/**
	 * Time property
	 * 
	 * @var string
	 */
	public $Time;

	/**
	 * DayOrder property
	 * 
	 * @var EWSType_short
	 */
	public $DayOrder;

	/**
	 * Month property
	 * 
	 * @var EWSType_short
	 */
	public $Month;

	/**
	 * DayOfWeek property
	 * 
	 * @var EWSType_DayOfWeekType
	 */
	public $DayOfWeek;

	/**
	 * Year property
	 * 
	 * @var string
	 */
	public $Year;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Bias',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'Time',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'DayOrder',
				'required' => false,
				'type' => 'short',
			),
			array(
				'name' => 'Month',
				'required' => false,
				'type' => 'short',
			),
			array(
				'name' => 'DayOfWeek',
				'required' => false,
				'type' => 'DayOfWeekType',
			),
			array(
				'name' => 'Year',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SerializableTimeZoneTime