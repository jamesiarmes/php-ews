<?php
/**
 * Definition of the FindFolderParentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FindFolderParentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FindFolderParentType extends EWSType {
	/**
	 * Folders property
	 * 
	 * @var EWSType_ArrayOfFoldersType
	 */
	public $Folders;

	/**
	 * IndexedPagingOffset property
	 * 
	 * @var EWSType_int
	 */
	public $IndexedPagingOffset;

	/**
	 * NumeratorOffset property
	 * 
	 * @var EWSType_int
	 */
	public $NumeratorOffset;

	/**
	 * AbsoluteDenominator property
	 * 
	 * @var EWSType_int
	 */
	public $AbsoluteDenominator;

	/**
	 * IncludesLastItemInRange property
	 * 
	 * @var EWSType_boolean
	 */
	public $IncludesLastItemInRange;

	/**
	 * TotalItemsInView property
	 * 
	 * @var EWSType_int
	 */
	public $TotalItemsInView;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Folders',
				'required' => false,
				'type' => 'ArrayOfFoldersType',
			),
			array(
				'name' => 'IndexedPagingOffset',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'NumeratorOffset',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'AbsoluteDenominator',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'IncludesLastItemInRange',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'TotalItemsInView',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FindFolderParentType