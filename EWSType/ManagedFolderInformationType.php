<?php
/**
 * Definition of the ManagedFolderInformationType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ManagedFolderInformationType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ManagedFolderInformationType extends EWSType {
	/**
	 * CanDelete property
	 * 
	 * @var EWSType_boolean
	 */
	public $CanDelete;

	/**
	 * CanRenameOrMove property
	 * 
	 * @var EWSType_boolean
	 */
	public $CanRenameOrMove;

	/**
	 * MustDisplayComment property
	 * 
	 * @var EWSType_boolean
	 */
	public $MustDisplayComment;

	/**
	 * HasQuota property
	 * 
	 * @var EWSType_boolean
	 */
	public $HasQuota;

	/**
	 * IsManagedFoldersRoot property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsManagedFoldersRoot;

	/**
	 * ManagedFolderId property
	 * 
	 * @var string
	 */
	public $ManagedFolderId;

	/**
	 * Comment property
	 * 
	 * @var string
	 */
	public $Comment;

	/**
	 * StorageQuota property
	 * 
	 * @var EWSType_int
	 */
	public $StorageQuota;

	/**
	 * FolderSize property
	 * 
	 * @var EWSType_int
	 */
	public $FolderSize;

	/**
	 * HomePage property
	 * 
	 * @var string
	 */
	public $HomePage;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'CanDelete',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'CanRenameOrMove',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'MustDisplayComment',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'HasQuota',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsManagedFoldersRoot',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'ManagedFolderId',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Comment',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'StorageQuota',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'FolderSize',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'HomePage',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ManagedFolderInformationType