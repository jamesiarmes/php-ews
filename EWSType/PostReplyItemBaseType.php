<?php
/**
 * Definition of the PostReplyItemBaseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PostReplyItemBaseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PostReplyItemBaseType extends EWSType {
	/**
	 * Subject property
	 * 
	 * @var string
	 */
	public $Subject;

	/**
	 * Body property
	 * 
	 * @var EWSType_BodyType
	 */
	public $Body;

	/**
	 * ReferenceItemId property
	 * 
	 * @var EWSType_ItemIdType
	 */
	public $ReferenceItemId;

	/**
	 * ObjectName property
	 * 
	 * @var string
	 */
	public $ObjectName;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Subject',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Body',
				'required' => false,
				'type' => 'BodyType',
			),
			array(
				'name' => 'ReferenceItemId',
				'required' => false,
				'type' => 'ItemIdType',
			),
			array(
				'name' => 'ObjectName',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PostReplyItemBaseType