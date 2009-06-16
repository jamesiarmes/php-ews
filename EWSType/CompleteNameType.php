<?php
/**
 * Definition of the CompleteNameType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the CompleteNameType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_CompleteNameType {
	/**
	 * Title property
	 * 
	 * @var EWSType_string
	 */
	public $Title;

	/**
	 * FirstName property
	 * 
	 * @var EWSType_string
	 */
	public $FirstName;

	/**
	 * MiddleName property
	 * 
	 * @var EWSType_string
	 */
	public $MiddleName;

	/**
	 * LastName property
	 * 
	 * @var EWSType_string
	 */
	public $LastName;

	/**
	 * Suffix property
	 * 
	 * @var EWSType_string
	 */
	public $Suffix;

	/**
	 * Initials property
	 * 
	 * @var EWSType_string
	 */
	public $Initials;

	/**
	 * FullName property
	 * 
	 * @var EWSType_string
	 */
	public $FullName;

	/**
	 * Nickname property
	 * 
	 * @var EWSType_string
	 */
	public $Nickname;

	/**
	 * YomiFirstName property
	 * 
	 * @var EWSType_string
	 */
	public $YomiFirstName;

	/**
	 * YomiLastName property
	 * 
	 * @var EWSType_string
	 */
	public $YomiLastName;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Title',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'FirstName',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'MiddleName',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'LastName',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Suffix',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Initials',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'FullName',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Nickname',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'YomiFirstName',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'YomiLastName',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class CompleteNameType