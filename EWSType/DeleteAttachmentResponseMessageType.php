<?php
/**
 * Definition of the DeleteAttachmentResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the DeleteAttachmentResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DeleteAttachmentResponseMessageType extends EWSType {
	/**
	 * RootItemId property
	 * 
	 * @var EWSType_RootItemIdType
	 */
	public $RootItemId;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'RootItemId',
				'required' => false,
				'type' => 'RootItemIdType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class DeleteAttachmentResponseMessageType