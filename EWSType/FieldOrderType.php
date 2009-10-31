<?php
/**
 * Definition of the FieldOrderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FieldOrderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FieldOrderType extends EWSType {
	/**
	 * Path property
	 * 
	 * @var EWSType_BasePathToElementType
	 */
	public $Path;

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
				'name' => 'Path',
				'required' => false,
				'type' => 'BasePathToElementType',
			),
			array(
				'name' => 'Order',
				'required' => true,
				'type' => 'SortDirectionType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FieldOrderType