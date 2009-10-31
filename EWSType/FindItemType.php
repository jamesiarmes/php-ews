<?php
/**
 * Definition of the FindItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FindItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FindItemType extends EWSType {
	/**
	 * ItemShape property
	 * 
	 * @var EWSType_ItemResponseShapeType
	 */
	public $ItemShape;

	/**
	 * IndexedPageItemView property
	 * 
	 * @var EWSType_IndexedPageViewType
	 */
	public $IndexedPageItemView;

	/**
	 * FractionalPageItemView property
	 * 
	 * @var EWSType_FractionalPageViewType
	 */
	public $FractionalPageItemView;

	/**
	 * CalendarView property
	 * 
	 * @var EWSType_CalendarViewType
	 */
	public $CalendarView;

	/**
	 * ContactsView property
	 * 
	 * @var EWSType_ContactsViewType
	 */
	public $ContactsView;

	/**
	 * GroupBy property
	 * 
	 * @var EWSType_GroupByType
	 */
	public $GroupBy;

	/**
	 * DistinguishedGroupBy property
	 * 
	 * @var EWSType_DistinguishedGroupByType
	 */
	public $DistinguishedGroupBy;

	/**
	 * Restriction property
	 * 
	 * @var EWSType_RestrictionType
	 */
	public $Restriction;

	/**
	 * SortOrder property
	 * 
	 * @var EWSType_NonEmptyArrayOfFieldOrdersType
	 */
	public $SortOrder;

	/**
	 * ParentFolderIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
	 */
	public $ParentFolderIds;

	/**
	 * Traversal property
	 * 
	 * @var EWSType_ItemQueryTraversalType
	 */
	public $Traversal;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ItemShape',
				'required' => true,
				'type' => 'ItemResponseShapeType',
			),
			array(
				'name' => 'IndexedPageItemView',
				'required' => false,
				'type' => 'IndexedPageViewType',
			),
			array(
				'name' => 'FractionalPageItemView',
				'required' => false,
				'type' => 'FractionalPageViewType',
			),
			array(
				'name' => 'CalendarView',
				'required' => false,
				'type' => 'CalendarViewType',
			),
			array(
				'name' => 'ContactsView',
				'required' => false,
				'type' => 'ContactsViewType',
			),
			array(
				'name' => 'GroupBy',
				'required' => false,
				'type' => 'GroupByType',
			),
			array(
				'name' => 'DistinguishedGroupBy',
				'required' => false,
				'type' => 'DistinguishedGroupByType',
			),
			array(
				'name' => 'Restriction',
				'required' => false,
				'type' => 'RestrictionType',
			),
			array(
				'name' => 'SortOrder',
				'required' => false,
				'type' => 'NonEmptyArrayOfFieldOrdersType',
			),
			array(
				'name' => 'ParentFolderIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfBaseFolderIdsType',
			),
			array(
				'name' => 'Traversal',
				'required' => true,
				'type' => 'ItemQueryTraversalType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FindItemType