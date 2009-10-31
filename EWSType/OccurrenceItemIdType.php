<?php
/**
 * Definition of the OccurrenceItemIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the OccurrenceItemIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_OccurrenceItemIdType extends EWSType {
	/**
	 * RecurringMasterId property
	 * 
	 * @var EWSType_DerivedItemIdType
	 */
	public $RecurringMasterId;

	/**
	 * ChangeKey property
	 * 
	 * @var string
	 */
	public $ChangeKey;

	/**
	 * InstanceIndex property
	 * 
	 * @var EWSType_int
	 */
	public $InstanceIndex;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'RecurringMasterId',
				'required' => false,
				'type' => 'DerivedItemIdType',
			),
			array(
				'name' => 'ChangeKey',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'InstanceIndex',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class OccurrenceItemIdType