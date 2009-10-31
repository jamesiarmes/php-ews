<?php
/**
 * Definition of the BodyType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BodyType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BodyType extends EWSType {
	/**
	 * _ property
	 * 
	 * @var string
	 */
	public $_;

	/**
	 * BodyType property
	 * 
	 * @var EWSType_BodyTypeType
	 */
	public $BodyType;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => '_',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'BodyType',
				'required' => false,
				'type' => 'BodyTypeType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BodyType