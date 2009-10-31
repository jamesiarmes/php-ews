<?php
/**
 * Definition of the TwoOperandExpressionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the TwoOperandExpressionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_TwoOperandExpressionType extends EWSType {
	/**
	 * Path property
	 * 
	 * @var EWSType_BasePathToElementType
	 */
	public $Path;

	/**
	 * FieldURIOrConstant property
	 * 
	 * @var EWSType_FieldURIOrConstantType
	 */
	public $FieldURIOrConstant;

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
				'name' => 'FieldURIOrConstant',
				'required' => false,
				'type' => 'FieldURIOrConstantType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class TwoOperandExpressionType