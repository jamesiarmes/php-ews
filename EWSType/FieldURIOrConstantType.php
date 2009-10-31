<?php
/**
 * Definition of the FieldURIOrConstantType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FieldURIOrConstantType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FieldURIOrConstantType extends EWSType {
	/**
	 * Path property
	 * 
	 * @var EWSType_BasePathToElementType
	 */
	public $Path;

	/**
	 * Constant property
	 * 
	 * @var EWSType_ConstantValueType
	 */
	public $Constant;

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
				'name' => 'Constant',
				'required' => false,
				'type' => 'ConstantValueType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FieldURIOrConstantType