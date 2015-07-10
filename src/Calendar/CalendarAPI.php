<?php

namespace jamesiarmes\PEWS\Calendar;

use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Enumeration;

/**
 * An API end point for Calendar items
 *
 * Class API
 * @package jamesiarmes\PEWS\Calendar
 */
class CalendarAPI extends API
{
    protected $_folderId;

    public function pickCalendar($displayName = 'default.calendar')
    {
        if ($displayName == 'default.calendar') {
            $folder = $this->getFolderByDistinguishedId('calendar');
        } else {
            $folder = $this->getFolderByDisplayName($displayName, 'calendar');
        }

        $this->_folderId = $folder->FolderId;
        return $this;
    }

    public function getFolderId()
    {
        return $this->_folderId;
    }

    /**
     * Create one or more calendar items
     *
     * @param $items CalendarItem[]|CalendarItem|Array or more calendar items to create
     * @return \jamesiarmes\PEWS\API\CreateItemResponseType
     */
    public function createCalendarItems($items)
    {
        //If the item passed in is an object, or if it's an assosiative array waiting to be an object, let's put it in to an array
        if (!is_array($items) || Type::arrayIsAssoc($items)) {
            $items = array($items);
        }


        $item = array('CalendarItem'=>$items);
        $options = array(
            'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE,
            'SavedItemFolderId' => array(
                'FolderId' => array('Id' => $this->getFolderId()->Id)
            )
        );

        $items = $this->createItems($item, $options);

        if (!is_array($items)) {
            $items = array($items);
        }

        return $items;
    }

    /**
     * Get the calendar folder from exchange
     *
     * @return mixed
     */
    public function getCalendarFolder()
    {
        $folder = $this->getFolderByFolderId($this->getFolderId()->Id);
        return $folder->CalendarFolder;
    }

    /**
     * Get a list of calendar items between two dates/times
     *
     * @param string $start
     * @param string $end
     * @param array $options
     * @return mixed
     */
    public function getCalendarItems($start = '12:00 AM', $end = '11:59 PM', $options = array())
    {
        $start = new \DateTime($start);
        $end = new \DateTime($end);

        $request = array(
            'Traversal' => 'Shallow',
            'ItemShape' => array(
                'BaseShape' => 'Default'
            ),
            'CalendarView' => array(
                'MaxEntriesReturned' => 20,
                'StartDate' => $start->format('c'),
                'EndDate' => $end->format('c')
            ),
            'ParentFolderIds' => array(
                'FolderId' => array(
                    'Id' => $this->getFolderId()->Id,
                    'ChangeKey' => $this->getFolderId()->ChangeKey
                )
            )
        );

        $request = array_merge($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->FindItem($request);
        $items = $response;
        if (!isset($items->CalendarItem)) {
            return array();
        }

        if (!is_array($items->CalendarItem)) {
            $items->CalendarItem = array($items->CalendarItem);
        }

        return $items->CalendarItem;
    }

    /**
     * Updates a calendar item with changes
     *
     * @param $id
     * @param $changeKey
     * @param $changes
     * @return mixed
     */
    public function updateCalendarItem($id, $changeKey, $changes)
    {
        $setItemFields = array();

        //Add each property to a setItemField
        foreach ($changes as $key => $value) {
            $fullName = $this->getFieldUriByName($key, 'calendar');

            $setItemFields[] = array(
                'FieldURI' => array('FieldURI' => $fullName),
                'CalendarItem' => array($key => $value)
            );
        }

        //Create the request
        $request = array(
            'ItemChange' => array(
                'ItemId' => array('Id' => $id, 'ChangeKey' => $changeKey),
                'Updates' => array('SetItemField' =>$setItemFields)
            )
        );

        $options = array(
            'SendMeetingInvitationsOrCancellations' => 'SendToNone'
        );

        $items =  $this->updateItems($request, $options);
        if (!is_array($items)) {
            $items = array($items);
        }

        return $items;
    }

    public function deleteCalendarItem($itemId, $changeKey)
    {
        return $this->deleteItems(array(
            'Id' => $itemId,
            'ChangeKey' => $changeKey
        ), array(
            'SendMeetingCancellations' => 'SendToNone'
        ));
    }

    /**
     * Get a list of changes on the calendar items
     *
     * @param null $syncState
     * @param array $options
     * @return mixed
     */
    public function listChanges($syncState = null, $options = array())
    {
        return parent::listItemChanges($this->getFolderId()->Id, $syncState, $options);
    }
}
