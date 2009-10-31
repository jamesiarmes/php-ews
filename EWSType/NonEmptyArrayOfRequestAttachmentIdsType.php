<?php
/**
 * Definition of the NonEmptyArrayOfRequestAttachmentIdsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfRequestAttachmentIdsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfRequestAttachmentIdsType extends EWSType {
	/**
	 * AttachmentId property
	 * 
	 * @var EWSType_RequestAttachmentIdType
	 */
	public $AttachmentId;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'AttachmentId',
				'required' => false,
				'type' => 'RequestAttachmentIdType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfRequestAttachmentIdsType