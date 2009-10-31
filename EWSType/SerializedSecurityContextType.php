<?php
/**
 * Definition of the SerializedSecurityContextType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SerializedSecurityContextType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SerializedSecurityContextType extends EWSType {
	/**
	 * UserSid property
	 * 
	 * @var string
	 */
	public $UserSid;

	/**
	 * GroupSids property
	 * 
	 * @var EWSType_NonEmptyArrayOfGroupIdentifiersType
	 */
	public $GroupSids;

	/**
	 * RestrictedGroupSids property
	 * 
	 * @var EWSType_NonEmptyArrayOfRestrictedGroupIdentifiersType
	 */
	public $RestrictedGroupSids;

	/**
	 * PrimarySmtpAddress property
	 * 
	 * @var string
	 */
	public $PrimarySmtpAddress;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'UserSid',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'GroupSids',
				'required' => false,
				'type' => 'NonEmptyArrayOfGroupIdentifiersType',
			),
			array(
				'name' => 'RestrictedGroupSids',
				'required' => false,
				'type' => 'NonEmptyArrayOfRestrictedGroupIdentifiersType',
			),
			array(
				'name' => 'PrimarySmtpAddress',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SerializedSecurityContextType