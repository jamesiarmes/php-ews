<?php
/**
 * Definition of the BaseGroupByType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BaseGroupByType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BaseGroupByType extends EWSType {
	/**
	 * Order property
	 * 
	 * @var EWSType_SortDirectionType
	 */
	public $Order;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Order',
				'required' => false,
				'type' => 'SortDirectionType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BaseGroupByType