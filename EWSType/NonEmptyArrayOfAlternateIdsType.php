<?php
/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfAlternateIdsType extends EWSType {
	/**
	 * AlternateId property
	 * 
	 * @var EWSType_AlternateIdType
	 */
	public $AlternateId;

	/**
	 * AlternatePublicFolderId property
	 * 
	 * @var EWSType_AlternatePublicFolderIdType
	 */
	public $AlternatePublicFolderId;

	/**
	 * AlternatePublicFolderItemId property
	 * 
	 * @var EWSType_AlternatePublicFolderItemIdType
	 */
	public $AlternatePublicFolderItemId;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'AlternateId',
				'required' => false,
				'type' => 'AlternateIdType',
			),
			array(
				'name' => 'AlternatePublicFolderId',
				'required' => false,
				'type' => 'AlternatePublicFolderIdType',
			),
			array(
				'name' => 'AlternatePublicFolderItemId',
				'required' => false,
				'type' => 'AlternatePublicFolderItemIdType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfAlternateIdsType