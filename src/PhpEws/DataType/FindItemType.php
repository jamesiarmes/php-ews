<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FindItemType type
 */
class FindItemType extends DataType
{
    /**
     * ItemShape property
     *
     * @var ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * IndexedPageItemView property
     *
     * @var IndexedPageViewType
     */
    public $IndexedPageItemView;

    /**
     * FractionalPageItemView property
     *
     * @var FractionalPageViewType
     */
    public $FractionalPageItemView;

    /**
     * CalendarView property
     *
     * @var CalendarViewType
     */
    public $CalendarView;

    /**
     * ContactsView property
     *
     * @var ContactsViewType
     */
    public $ContactsView;

    /**
     * GroupBy property
     *
     * @var GroupByType
     */
    public $GroupBy;

    /**
     * DistinguishedGroupBy property
     *
     * @var DistinguishedGroupByType
     */
    public $DistinguishedGroupBy;

    /**
     * Restriction property
     *
     * @var RestrictionType
     */
    public $Restriction;

    /**
     * SortOrder property
     *
     * @var NonEmptyArrayOfFieldOrdersType
     */
    public $SortOrder;

    /**
     * ParentFolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * Traversal property
     *
     * @var ItemQueryTraversalType
     */
    public $Traversal;
}
