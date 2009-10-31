<?php
/**
 * Definition of the MultipleOperandBooleanExpressionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the MultipleOperandBooleanExpressionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_MultipleOperandBooleanExpressionType extends EWSType {
	/**
	 * SearchExpression property
	 * 
	 * @var EWSType_SearchExpressionType
	 */
	public $SearchExpression;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'SearchExpression',
				'required' => false,
				'type' => 'SearchExpressionType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class MultipleOperandBooleanExpressionType