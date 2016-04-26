<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindItemType
 *
 *
 * XSD Type: FindItemType
 *
 * @method string getTraversal()
 * @method FindItemType setTraversal(string $traversal)
 * @method \jamesiarmes\PEWS\API\Type\ItemResponseShapeType getItemShape()
 * @method FindItemType setItemShape(\jamesiarmes\PEWS\API\Type\ItemResponseShapeType $itemShape)
 * @method \jamesiarmes\PEWS\API\Type\IndexedPageViewType getIndexedPageItemView()
 * @method FindItemType setIndexedPageItemView(\jamesiarmes\PEWS\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method \jamesiarmes\PEWS\API\Type\FractionalPageViewType getFractionalPageItemView()
 * @method FindItemType setFractionalPageItemView(\jamesiarmes\PEWS\API\Type\FractionalPageViewType $fractionalPageItemView)
 * @method \jamesiarmes\PEWS\API\Type\CalendarViewType getCalendarView()
 * @method FindItemType setCalendarView(\jamesiarmes\PEWS\API\Type\CalendarViewType $calendarView)
 * @method \jamesiarmes\PEWS\API\Type\ContactsViewType getContactsView()
 * @method FindItemType setContactsView(\jamesiarmes\PEWS\API\Type\ContactsViewType $contactsView)
 * @method \jamesiarmes\PEWS\API\Type\GroupByType getGroupBy()
 * @method FindItemType setGroupBy(\jamesiarmes\PEWS\API\Type\GroupByType $groupBy)
 * @method \jamesiarmes\PEWS\API\Type\DistinguishedGroupByType getDistinguishedGroupBy()
 * @method FindItemType setDistinguishedGroupBy(\jamesiarmes\PEWS\API\Type\DistinguishedGroupByType $distinguishedGroupBy)
 * @method \jamesiarmes\PEWS\API\Type\RestrictionType getRestriction()
 * @method FindItemType setRestriction(\jamesiarmes\PEWS\API\Type\RestrictionType $restriction)
 * @method FindItemType addSortOrder(\jamesiarmes\PEWS\API\Type\FieldOrderType $sortOrder)
 * @method \jamesiarmes\PEWS\API\Type\FieldOrderType[] getSortOrder()
 * @method FindItemType setSortOrder(array $sortOrder)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType getParentFolderIds()
 * @method FindItemType setParentFolderIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 * @method string getQueryString()
 * @method FindItemType setQueryString(string $queryString)
 */
class FindItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IndexedPageViewType
     */
    protected $indexedPageItemView = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FractionalPageViewType
     */
    protected $fractionalPageItemView = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\CalendarViewType
     */
    protected $calendarView = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ContactsViewType
     */
    protected $contactsView = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\GroupByType
     */
    protected $groupBy = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DistinguishedGroupByType
     */
    protected $distinguishedGroupBy = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FieldOrderType[]
     */
    protected $sortOrder = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $parentFolderIds = null;

    /**
     * @var string
     */
    protected $queryString = null;
}
