<?php
/**
 * Definition of the BaseFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BaseFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BaseFolderType extends EWSType {
	/**
	 * FolderId property
	 * 
	 * @var EWSType_FolderIdType
	 */
	public $FolderId;

	/**
	 * ParentFolderId property
	 * 
	 * @var EWSType_FolderIdType
	 */
	public $ParentFolderId;

	/**
	 * FolderClass property
	 * 
	 * @var string
	 */
	public $FolderClass;

	/**
	 * DisplayName property
	 * 
	 * @var string
	 */
	public $DisplayName;

	/**
	 * TotalCount property
	 * 
	 * @var EWSType_int
	 */
	public $TotalCount;

	/**
	 * ChildFolderCount property
	 * 
	 * @var EWSType_int
	 */
	public $ChildFolderCount;

	/**
	 * ExtendedProperty property
	 * 
	 * @var EWSType_ExtendedPropertyType
	 */
	public $ExtendedProperty;

	/**
	 * ManagedFolderInformation property
	 * 
	 * @var EWSType_ManagedFolderInformationType
	 */
	public $ManagedFolderInformation;

	/**
	 * EffectiveRights property
	 * 
	 * @var EWSType_EffectiveRightsType
	 */
	public $EffectiveRights;

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
				'name' => 'ParentFolderId',
				'required' => false,
				'type' => 'FolderIdType',
			),
			array(
				'name' => 'FolderClass',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'DisplayName',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'TotalCount',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'ChildFolderCount',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'ExtendedProperty',
				'required' => false,
				'type' => 'ExtendedPropertyType',
			),
			array(
				'name' => 'ManagedFolderInformation',
				'required' => false,
				'type' => 'ManagedFolderInformationType',
			),
			array(
				'name' => 'EffectiveRights',
				'required' => false,
				'type' => 'EffectiveRightsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BaseFolderType