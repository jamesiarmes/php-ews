<?php
/**
 * Definition of the RequestAttachmentIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the RequestAttachmentIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_RequestAttachmentIdType extends EWSType {
	/**
	 * Id property
	 * 
	 * @var string
	 */
	public $Id;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Id',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class RequestAttachmentIdType