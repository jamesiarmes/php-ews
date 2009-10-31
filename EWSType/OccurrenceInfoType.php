<?php
/**
 * Definition of the OccurrenceInfoType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the OccurrenceInfoType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_OccurrenceInfoType extends EWSType {
	/**
	 * ItemId property
	 * 
	 * @var EWSType_ItemIdType
	 */
	public $ItemId;

	/**
	 * Start property
	 * 
	 * @var EWSType_dateTime
	 */
	public $Start;

	/**
	 * End property
	 * 
	 * @var EWSType_dateTime
	 */
	public $End;

	/**
	 * OriginalStart property
	 * 
	 * @var EWSType_dateTime
	 */
	public $OriginalStart;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ItemId',
				'required' => false,
				'type' => 'ItemIdType',
			),
			array(
				'name' => 'Start',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'End',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'OriginalStart',
				'required' => false,
				'type' => 'dateTime',
			),
		); // end $this->schema
	} // end function __construct()
} // end class OccurrenceInfoType