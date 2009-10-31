<?php
/**
 * Definition of the DistinguishedFolderIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the DistinguishedFolderIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DistinguishedFolderIdType extends EWSType {
	/**
	 * Mailbox property
	 * 
	 * @var EWSType_EmailAddressType
	 */
	public $Mailbox;

	/**
	 * Id property
	 * 
	 * @var EWSType_DistinguishedFolderIdNameType
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
				'name' => 'Mailbox',
				'required' => false,
				'type' => 'EmailAddressType',
			),
			array(
				'name' => 'Id',
				'required' => false,
				'type' => 'DistinguishedFolderIdNameType',
			),
			array(
				'name' => 'ChangeKey',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class DistinguishedFolderIdType