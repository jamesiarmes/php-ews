<?php
/**
 * Definition of the AttachmentIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the AttachmentIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_AttachmentIdType {
	/**
	 * RootItemId property
	 * 
	 * @var EWSType_string
	 */
	public $RootItemId;

	/**
	 * RootItemChangeKey property
	 * 
	 * @var EWSType_string
	 */
	public $RootItemChangeKey;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'RootItemId',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'RootItemChangeKey',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class AttachmentIdType