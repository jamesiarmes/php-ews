<?php
/**
 * Definition of the NonEmptyArrayOfFieldOrdersType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfFieldOrdersType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfFieldOrdersType extends EWSType {
	/**
	 * FieldOrder property
	 * 
	 * @var EWSType_FieldOrderType
	 */
	public $FieldOrder;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FieldOrder',
				'required' => false,
				'type' => 'FieldOrderType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfFieldOrdersType