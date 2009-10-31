<?php
/**
 * Definition of the NotType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NotType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NotType extends EWSType {
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
} // end class NotType