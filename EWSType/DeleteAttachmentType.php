<?php
/**
 * Definition of the DeleteAttachmentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the DeleteAttachmentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DeleteAttachmentType extends EWSType {
	/**
	 * AttachmentIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfRequestAttachmentIdsType
	 */
	public $AttachmentIds;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'AttachmentIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfRequestAttachmentIdsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class DeleteAttachmentType