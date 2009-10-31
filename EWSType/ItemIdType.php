<?php
/**
 * Definition of the ItemIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ItemIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ItemIdType extends EWSType {
	/**
	 * Id property
	 * 
	 * @var string
	 */
	public $Id;

	/**
	 * ChangeKey property
	 * 
	 * @var string
	 */
	public $ChangeKey;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Id',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'ChangeKey',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ItemIdType