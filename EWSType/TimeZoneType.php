<?php
/**
 * Definition of the TimeZoneType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the TimeZoneType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_TimeZoneType extends EWSType {
	/**
	 * BaseOffset property
	 * 
	 * @var EWSType_duration
	 */
	public $BaseOffset;

	/**
	 * Standard property
	 * 
	 * @var EWSType_TimeChangeType
	 */
	public $Standard;

	/**
	 * Daylight property
	 * 
	 * @var EWSType_TimeChangeType
	 */
	public $Daylight;

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
				'name' => 'BaseOffset',
				'required' => false,
				'type' => 'duration',
			),
			array(
				'name' => 'Standard',
				'required' => false,
				'type' => 'TimeChangeType',
			),
			array(
				'name' => 'Daylight',
				'required' => false,
				'type' => 'TimeChangeType',
			),
			array(
				'name' => 'TimeZoneName',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class TimeZoneType