<?php
/**
 * Definition of the FindItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FindItemType type
 */
class EWSType_FindItemType extends EWSType
{
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
}
