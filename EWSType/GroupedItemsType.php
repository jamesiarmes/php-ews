<?php
/**
 * Definition of the GroupedItemsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GroupedItemsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GroupedItemsType extends EWSType {
	/**
	 * GroupIndex property
	 * 
	 * @var string
	 */
	public $GroupIndex;

	/**
	 * Items property
	 * 
	 * @var EWSType_ArrayOfRealItemsType
	 */
	public $Items;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'GroupIndex',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Items',
				'required' => false,
				'type' => 'ArrayOfRealItemsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GroupedItemsType