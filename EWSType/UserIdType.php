<?php
/**
 * Definition of the UserIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the UserIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_UserIdType extends EWSType {
	/**
	 * SID property
	 * 
	 * @var string
	 */
	public $SID;

	/**
	 * PrimarySmtpAddress property
	 * 
	 * @var string
	 */
	public $PrimarySmtpAddress;

	/**
	 * DisplayName property
	 * 
	 * @var string
	 */
	public $DisplayName;

	/**
	 * DistinguishedUser property
	 * 
	 * @var EWSType_DistinguishedUserType
	 */
	public $DistinguishedUser;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'SID',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'PrimarySmtpAddress',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'DisplayName',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'DistinguishedUser',
				'required' => false,
				'type' => 'DistinguishedUserType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class UserIdType