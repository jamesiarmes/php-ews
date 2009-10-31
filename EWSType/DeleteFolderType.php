<?php
/**
 * Definition of the DeleteFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the DeleteFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DeleteFolderType extends EWSType {
	/**
	 * FolderIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
	 */
	public $FolderIds;

	/**
	 * DeleteType property
	 * 
	 * @var EWSType_DisposalType
	 */
	public $DeleteType;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfBaseFolderIdsType',
			),
			array(
				'name' => 'DeleteType',
				'required' => false,
				'type' => 'DisposalType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class DeleteFolderType