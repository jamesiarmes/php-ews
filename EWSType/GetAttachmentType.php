<?php
/**
 * Definition of the GetAttachmentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GetAttachmentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GetAttachmentType extends EWSType {
	/**
	 * AttachmentShape property
	 * 
	 * @var EWSType_AttachmentResponseShapeType
	 */
	public $AttachmentShape;

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
				'name' => 'AttachmentShape',
				'required' => false,
				'type' => 'AttachmentResponseShapeType',
			),
			array(
				'name' => 'AttachmentIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfRequestAttachmentIdsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GetAttachmentType