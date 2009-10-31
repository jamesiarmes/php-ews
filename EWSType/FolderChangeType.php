<?php
/**
 * Definition of the FolderChangeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FolderChangeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FolderChangeType extends EWSType {
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
	 * Updates property
	 * 
	 * @var EWSType_NonEmptyArrayOfFolderChangeDescriptionsType
	 */
	public $Updates;

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
			array(
				'name' => 'Updates',
				'required' => false,
				'type' => 'NonEmptyArrayOfFolderChangeDescriptionsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FolderChangeType