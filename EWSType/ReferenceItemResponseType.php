<?php
/**
 * Definition of the ReferenceItemResponseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ReferenceItemResponseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ReferenceItemResponseType extends EWSType {
	/**
	 * ReferenceItemId property
	 * 
	 * @var EWSType_ItemIdType
	 */
	public $ReferenceItemId;

	/**
	 * ObjectName property
	 * 
	 * @var string
	 */
	public $ObjectName;

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
			array(
				'name' => 'ObjectName',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ReferenceItemResponseType