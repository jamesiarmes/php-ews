<?php
/**
 * Definition of the TargetFolderIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the TargetFolderIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_TargetFolderIdType extends EWSType {
	/**
	 * FolderId property
	 * 
	 * @var EWSType_FolderIdType
	 */
	public $FolderId;

	/**
	 * DistinguishedFolderId property
	 * 
	 * @var EWSType_DistinguishedFolderIdType
	 */
	public $DistinguishedFolderId;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderId',
				'required' => false,
				'type' => 'FolderIdType',
			),
			array(
				'name' => 'DistinguishedFolderId',
				'required' => false,
				'type' => 'DistinguishedFolderIdType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class TargetFolderIdType