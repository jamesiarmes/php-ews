<?php
/**
 * Definition of the AttachmentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the AttachmentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_AttachmentType extends EWSType {
	/**
	 * AttachmentId property
	 * 
	 * @var EWSType_AttachmentIdType
	 */
	public $AttachmentId;

	/**
	 * Name property
	 * 
	 * @var string
	 */
	public $Name;

	/**
	 * ContentType property
	 * 
	 * @var string
	 */
	public $ContentType;

	/**
	 * ContentId property
	 * 
	 * @var string
	 */
	public $ContentId;

	/**
	 * ContentLocation property
	 * 
	 * @var string
	 */
	public $ContentLocation;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'AttachmentId',
				'required' => false,
				'type' => 'AttachmentIdType',
			),
			array(
				'name' => 'Name',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'ContentType',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'ContentId',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'ContentLocation',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class AttachmentType