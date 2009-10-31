<?php
/**
 * Definition of the ResponseObjectCoreType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ResponseObjectCoreType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ResponseObjectCoreType extends EWSType {
	/**
	 * ReferenceItemId property
	 * 
	 * @var EWSType_ItemIdType
	 */
	public $ReferenceItemId;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ReferenceItemId',
				'required' => false,
				'type' => 'ItemIdType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ResponseObjectCoreType