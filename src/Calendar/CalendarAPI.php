<?php

namespace jamesiarmes\PEWS\Calendar;

use jamesiarmes\PEWS\API\Type\CalendarItemType;
use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Enumeration;
use DateTime;

/**
 * An API end point for Calendar items
 *
 * Class API
 * @package jamesiarmes\PEWS\Calendar
 */
class CalendarAPI extends API
{
    /**
     * @var Type\FolderIdType
     */
    protected $folderId;

    /**
     * Pick a Calendar based on it's name
     *
     * @param string|null $displayName
     * @return $this
     */
    public function pickCalendar($displayName = null)
    {
        if ($displayName == 'default.calendar' || $displayName == null) {
            $folder = $this->getFolderByDistinguishedId('calendar');
        } else {
            $folder = $this->getFolderByDisplayName($displayName, 'calendar');
        }

        $this->folderId = $folder->getFolderId();

        return $this;
    }

    /**
     * @return Type\FolderIdType
     */
    public function getFolderId()
    {
        if ($this->folderId === null) {
            $this->pickCalendar();
        }

        return $this->folderId;
    }

    /**
     * @param Type\FolderIdType $folderId
     * @return $this
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;

        return $this;
    }

    /**
     * Create one or more calendar items
     *
     * @param $items CalendarItemType[]|CalendarItemType|array or more calendar items to create
     * @param $options array Options to merge in to the request
     * @return Type\ItemIdType[]
     */
    public function createCalendarItems($items, $options = array())
    {
        //If the item passed in is an object, or if it's an associative]
        // array waiting to be an object, let's put it in to an array
        if (!is_array($items) || Type::arrayIsAssoc($items)) {
            $items = array($items);
        }

        $item = array('CalendarItem' => $items);
        $defaultOptions = array(
            'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE,
            'SavedItemFolderId' => array(
                'FolderId' => $this->getFolderId()->toXmlObject()
            )
        );

        $options = array_replace_recursive($defaultOptions, $options);

        $items = $this->createItems($item, $options);

        if (!is_array($items)) {
            $items = array($items);
        }

        return $items;
    }

    /**
     * Get a list of calendar items between two dates/times
     *
     * @param string|DateTime $start
     * @param string|DateTime $end
     * @param array $options
     * @return CalendarItemType[]|Type\FindItemParentType
     */
    public function getCalendarItems($start = '12:00 AM', $end = '11:59 PM', $options = array())
    {
        if (!($start instanceof DateTime)) {
            $start = new DateTime($start);
        }

        if (!($end instanceof DateTime)) {
            $end = new DateTime($end);
        }

        $request = array(
            'Traversal' => 'Shallow',
            'ItemShape' => array(
                'BaseShape' => 'AllProperties'
            ),
            'CalendarView' => array(
                'MaxEntriesReturned' => 100,
                'StartDate' => $start->format('c'),
                'EndDate' => $end->format('c')
            ),
            'ParentFolderIds' => array(
                'FolderId' => $this->getFolderId()->toXmlObject()
            )
        );

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->FindItem($request);
        $items = $response;

        return $items;
    }

    /**
     * @param $id
     * @param $changeKey
     * @return Type\CalendarItemType
     */
    public function getCalendarItem($id, $changeKey)
    {
        return $this->getItem(['Id' => $id, 'ChangeKey' => $changeKey]);
    }

    /**
     * Updates a calendar item with changes
     *
     * @param $itemId Type\ItemIdType
     * @param $changes
     * @return Type\CalendarItemType[]
     */
    public function updateCalendarItem(Type\ItemIdType $itemId, $changes)
    {
        //Create the request
        $request = array(
            'ItemChange' => array(
                'ItemId' => $itemId->toArray(),
                'Updates' => array(
                    'SetItemField' => $this->buildUpdateItemChanges('CalendarItem', 'calendar', $changes)
                )
            )
        );

        $options = array(
            'SendMeetingInvitationsOrCancellations' => 'SendToNone'
        );

        $items = $this->updateItems($request, $options)->getCalendarItem();

        if (!is_array($items)) {
            $items = array($items);
        }

        return $items;
    }

    /**
     * @param $itemId Type\ItemIdType
     * @return bool
     */
    public function deleteCalendarItem(Type\ItemIdType $itemId)
    {
        return $this->deleteItems($itemId, array(
            'SendMeetingCancellations' => 'SendToNone'
        ));
    }

    /**
     * @param string $start
     * @param string $end
     * @param array $options
     */
    public function deleteAllCalendarItems($start = '12:00 AM', $end = '11:59 PM', $options = array())
    {
        $items = $this->getCalendarItems($start, $end, $options);
        foreach ($items as $item) {
            $this->deleteCalendarItem($item->getItemId());
        }
    }

    /**
     * Get a list of changes on the calendar items
     *
     * @param null $syncState
     * @param array $options
     * @return API\Message\SyncFolderItemsResponseMessageType
     */
    public function listChanges($syncState = null, $options = array())
    {
        return parent::listItemChanges($this->getFolderId(), $syncState, $options);
    }
}
