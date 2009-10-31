<?php
/**
 * Definition of the GetDelegateType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GetDelegateType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GetDelegateType extends EWSType {
	/**
	 * UserIds property
	 * 
	 * @var EWSType_ArrayOfUserIdType
	 */
	public $UserIds;

	/**
	 * IncludePermissions property
	 * 
	 * @var EWSType_boolean
	 */
	public $IncludePermissions;

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
			array(
				'name' => 'IncludePermissions',
				'required' => false,
				'type' => 'boolean',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GetDelegateType