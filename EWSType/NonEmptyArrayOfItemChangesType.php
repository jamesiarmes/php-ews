<?php
/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfItemChangesType extends EWSType {
	/**
	 * ItemChange property
	 * 
	 * @var EWSType_ItemChangeType
	 */
	public $ItemChange;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ItemChange',
				'required' => false,
				'type' => 'ItemChangeType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfItemChangesType