<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FindItemType
 *
 *
 * XSD Type: FindItemType
 *
 * @method FindItemType getTraversal()
 * @method FindItemType setTraversal($traversal)
 * @method FindItemType getItemShape()
 * @method FindItemType setItemShape($itemShape)
 * @method FindItemType getIndexedPageItemView()
 * @method FindItemType setIndexedPageItemView($indexedPageItemView)
 * @method FindItemType getFractionalPageItemView()
 * @method FindItemType setFractionalPageItemView($fractionalPageItemView)
 * @method FindItemType getCalendarView()
 * @method FindItemType setCalendarView($calendarView)
 * @method FindItemType getContactsView()
 * @method FindItemType setContactsView($contactsView)
 * @method FindItemType getGroupBy()
 * @method FindItemType setGroupBy($groupBy)
 * @method FindItemType getDistinguishedGroupBy()
 * @method FindItemType setDistinguishedGroupBy($distinguishedGroupBy)
 * @method FindItemType getRestriction()
 * @method FindItemType setRestriction($restriction)
 * @method FindItemType getSortOrder()
 * @method FindItemType setSortOrder($sortOrder)
 * @method FindItemType getParentFolderIds()
 * @method FindItemType setParentFolderIds($parentFolderIds)
 * @method FindItemType getQueryString()
 * @method FindItemType setQueryString($queryString)
 */
class FindItemType extends BaseRequestType
{

    /**
     * @property string $traversal
     */
    protected $traversal = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemResponseShapeType $itemShape
     */
    protected $itemShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IndexedPageViewType
     * $indexedPageItemView
     */
    protected $indexedPageItemView = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FractionalPageViewType
     * $fractionalPageItemView
     */
    protected $fractionalPageItemView = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\CalendarViewType $calendarView
     */
    protected $calendarView = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ContactsViewType $contactsView
     */
    protected $contactsView = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\GroupByType $groupBy
     */
    protected $groupBy = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\DistinguishedGroupByType
     * $distinguishedGroupBy
     */
    protected $distinguishedGroupBy = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RestrictionType $restriction
     */
    protected $restriction = null;

    /**
     * @property array $sortOrder
     */
    protected $sortOrder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType
     * $parentFolderIds
     */
    protected $parentFolderIds = null;

    /**
     * @property string $queryString
     */
    protected $queryString = null;


}

