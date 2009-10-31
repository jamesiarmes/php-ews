<?php
/**
 * Definition of the ItemInfoResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ItemInfoResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ItemInfoResponseMessageType extends EWSType {
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
				'name' => 'Items',
				'required' => false,
				'type' => 'ArrayOfRealItemsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ItemInfoResponseMessageType