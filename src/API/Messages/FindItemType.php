<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FindItemType
 *
 *
 * XSD Type: FindItemType
 *
 * @method FindItemType getTraversal()
 * @method FindItemType setTraversal(string $traversal)
 * @method FindItemType getItemShape()
 * @method FindItemType setItemShape(\jamesiarmes\PEWS\API\TypeTest\ItemResponseShapeType $itemShape)
 * @method FindItemType getIndexedPageItemView()
 * @method FindItemType setIndexedPageItemView(\jamesiarmes\PEWS\API\TypeTest\IndexedPageViewType $indexedPageItemView)
 * @method FindItemType getFractionalPageItemView()
 * @method FindItemType setFractionalPageItemView(\jamesiarmes\PEWS\API\TypeTest\FractionalPageViewType $fractionalPageItemView)
 * @method FindItemType getCalendarView()
 * @method FindItemType setCalendarView(\jamesiarmes\PEWS\API\TypeTest\CalendarViewType $calendarView)
 * @method FindItemType getContactsView()
 * @method FindItemType setContactsView(\jamesiarmes\PEWS\API\TypeTest\ContactsViewType $contactsView)
 * @method FindItemType getGroupBy()
 * @method FindItemType setGroupBy(\jamesiarmes\PEWS\API\TypeTest\GroupByType $groupBy)
 * @method FindItemType getDistinguishedGroupBy()
 * @method FindItemType setDistinguishedGroupBy(\jamesiarmes\PEWS\API\TypeTest\DistinguishedGroupByType $distinguishedGroupBy)
 * @method FindItemType getRestriction()
 * @method FindItemType setRestriction(\jamesiarmes\PEWS\API\TypeTest\RestrictionType $restriction)
 * @method FindItemType getSortOrder()
 * @method FindItemType setSortOrder(array $sortOrder)
 * @method FindItemType getParentFolderIds()
 * @method FindItemType setParentFolderIds(\jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 * @method FindItemType getQueryString()
 * @method FindItemType setQueryString(string $queryString)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\FieldOrderType[] $sortOrder
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

