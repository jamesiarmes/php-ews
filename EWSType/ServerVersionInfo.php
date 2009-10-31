<?php
/**
 * Definition of the ServerVersionInfo type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ServerVersionInfo type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ServerVersionInfo extends EWSType {
	/**
	 * MajorVersion property
	 * 
	 * @var EWSType_int
	 */
	public $MajorVersion;

	/**
	 * MinorVersion property
	 * 
	 * @var EWSType_int
	 */
	public $MinorVersion;

	/**
	 * MajorBuildNumber property
	 * 
	 * @var EWSType_int
	 */
	public $MajorBuildNumber;

	/**
	 * MinorBuildNumber property
	 * 
	 * @var EWSType_int
	 */
	public $MinorBuildNumber;

	/**
	 * Version property
	 * 
	 * @var string
	 */
	public $Version;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'MajorVersion',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'MinorVersion',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'MajorBuildNumber',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'MinorBuildNumber',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'Version',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ServerVersionInfo