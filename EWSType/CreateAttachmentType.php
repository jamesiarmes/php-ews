<?php
/**
 * Definition of the CreateAttachmentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the CreateAttachmentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_CreateAttachmentType extends EWSType {
	/**
	 * ParentItemId property
	 * 
	 * @var EWSType_ItemIdType
	 */
	public $ParentItemId;

	/**
	 * Attachments property
	 * 
	 * @var EWSType_NonEmptyArrayOfAttachmentsType
	 */
	public $Attachments;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ParentItemId',
				'required' => false,
				'type' => 'ItemIdType',
			),
			array(
				'name' => 'Attachments',
				'required' => false,
				'type' => 'NonEmptyArrayOfAttachmentsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class CreateAttachmentType