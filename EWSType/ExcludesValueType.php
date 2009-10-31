<?php
/**
 * Definition of the ExcludesValueType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ExcludesValueType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ExcludesValueType extends EWSType {
	/**
	 * Value property
	 * 
	 * @var EWSType_ExcludesAttributeType
	 */
	public $Value;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Value',
				'required' => false,
				'type' => 'ExcludesAttributeType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ExcludesValueType