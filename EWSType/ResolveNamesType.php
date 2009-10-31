<?php
/**
 * Definition of the ResolveNamesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ResolveNamesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ResolveNamesType extends EWSType {
	/**
	 * ParentFolderIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
	 */
	public $ParentFolderIds;

	/**
	 * UnresolvedEntry property
	 * 
	 * @var EWSType_NonEmptyStringType
	 */
	public $UnresolvedEntry;

	/**
	 * ReturnFullContactData property
	 * 
	 * @var EWSType_boolean
	 */
	public $ReturnFullContactData;

	/**
	 * SearchScope property
	 * 
	 * @var EWSType_ResolveNamesSearchScopeType
	 */
	public $SearchScope;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ParentFolderIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfBaseFolderIdsType',
			),
			array(
				'name' => 'UnresolvedEntry',
				'required' => false,
				'type' => 'NonEmptyStringType',
			),
			array(
				'name' => 'ReturnFullContactData',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'SearchScope',
				'required' => false,
				'type' => 'ResolveNamesSearchScopeType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ResolveNamesType