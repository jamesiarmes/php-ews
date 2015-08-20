<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindItemType
 *
 *
 * XSD Type: FindItemType
 *
 * @method FindItemType getTraversal()
 * @method FindItemType setTraversal(string $traversal)
 * @method FindItemType getItemShape()
 * @method FindItemType setItemShape(\jamesiarmes\PEWS\API\Type\ItemResponseShapeType $itemShape)
 * @method FindItemType getIndexedPageItemView()
 * @method FindItemType setIndexedPageItemView(\jamesiarmes\PEWS\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method FindItemType getFractionalPageItemView()
 * @method FindItemType setFractionalPageItemView(\jamesiarmes\PEWS\API\Type\FractionalPageViewType $fractionalPageItemView)
 * @method FindItemType getCalendarView()
 * @method FindItemType setCalendarView(\jamesiarmes\PEWS\API\Type\CalendarViewType $calendarView)
 * @method FindItemType getContactsView()
 * @method FindItemType setContactsView(\jamesiarmes\PEWS\API\Type\ContactsViewType $contactsView)
 * @method FindItemType getGroupBy()
 * @method FindItemType setGroupBy(\jamesiarmes\PEWS\API\Type\GroupByType $groupBy)
 * @method FindItemType getDistinguishedGroupBy()
 * @method FindItemType setDistinguishedGroupBy(\jamesiarmes\PEWS\API\Type\DistinguishedGroupByType $distinguishedGroupBy)
 * @method FindItemType getRestriction()
 * @method FindItemType setRestriction(\jamesiarmes\PEWS\API\Type\RestrictionType $restriction)
 * @method FindItemType getSortOrder()
 * @method FindItemType setSortOrder(array $sortOrder)
 * @method FindItemType getParentFolderIds()
 * @method FindItemType setParentFolderIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
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
     * @property \jamesiarmes\PEWS\API\Type\ItemResponseShapeType $itemShape
     */
    protected $itemShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IndexedPageViewType $indexedPageItemView
     */
    protected $indexedPageItemView = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\FractionalPageViewType
     * $fractionalPageItemView
     */
    protected $fractionalPageItemView = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\CalendarViewType $calendarView
     */
    protected $calendarView = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ContactsViewType $contactsView
     */
    protected $contactsView = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\GroupByType $groupBy
     */
    protected $groupBy = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DistinguishedGroupByType
     * $distinguishedGroupBy
     */
    protected $distinguishedGroupBy = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RestrictionType $restriction
     */
    protected $restriction = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\FieldOrderType[] $sortOrder
     */
    protected $sortOrder = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType
     * $parentFolderIds
     */
    protected $parentFolderIds = null;

    /**
     * @property string $queryString
     */
    protected $queryString = null;


}

