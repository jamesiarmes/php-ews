<?php
/**
 * Definition of the SearchParametersType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SearchParametersType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SearchParametersType extends EWSType {
	/**
	 * Restriction property
	 * 
	 * @var EWSType_RestrictionType
	 */
	public $Restriction;

	/**
	 * BaseFolderIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
	 */
	public $BaseFolderIds;

	/**
	 * Traversal property
	 * 
	 * @var EWSType_SearchFolderTraversalType
	 */
	public $Traversal;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Restriction',
				'required' => false,
				'type' => 'RestrictionType',
			),
			array(
				'name' => 'BaseFolderIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfBaseFolderIdsType',
			),
			array(
				'name' => 'Traversal',
				'required' => false,
				'type' => 'SearchFolderTraversalType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SearchParametersType