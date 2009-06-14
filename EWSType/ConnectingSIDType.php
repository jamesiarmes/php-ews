<?php
/**
 * Definition of the ConnectingSIDType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ConnectingSIDType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ConnectingSIDType {
	/**
	 * PrincipalName property
	 * 
	 * @var EWSType_string
	 */
	public $PrincipalName;

	/**
	 * SID property
	 * 
	 * @var EWSType_string
	 */
	public $SID;

	/**
	 * PrimarySmtpAddress property
	 * 
	 * @var EWSType_string
	 */
	public $PrimarySmtpAddress;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'PrincipalName',
				'required' => false,
				'type' => 'string',
			),
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
		); // end $this->schema
	} // end function __construct()
} // end class ConnectingSIDType