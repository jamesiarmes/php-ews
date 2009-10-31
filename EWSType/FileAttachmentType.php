<?php
/**
 * Definition of the FileAttachmentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FileAttachmentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FileAttachmentType extends EWSType {
	/**
	 * Content property
	 * 
	 * @var EWSType_base64Binary
	 */
	public $Content;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Content',
				'required' => false,
				'type' => 'base64Binary',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FileAttachmentType