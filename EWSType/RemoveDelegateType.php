<?php
/**
 * Definition of the RemoveDelegateType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the RemoveDelegateType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_RemoveDelegateType extends EWSType {
	/**
	 * UserIds property
	 * 
	 * @var EWSType_ArrayOfUserIdType
	 */
	public $UserIds;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'UserIds',
				'required' => false,
				'type' => 'ArrayOfUserIdType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class RemoveDelegateType