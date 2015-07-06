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
class Calendar extends API
{
    protected $_folderId;

    public function pickCalendar($displayName = 'default.calendar')
    {
        if ($displayName == 'default.calendar') {
            $folder = $this->getFolderByDistinguishedId('calendar')->CalendarFolder;
        } else {
            $folder = $this->getFolderByDisplayName($displayName, 'calendar');
        }

        $this->_folderId = $folder->FolderId;
        return $this;
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
                'FolderId' => array('Id' => $this->_folderId->Id)
            )
        );
        $response = $this->createItems($item, $options);

        return $response;
    }

    /**
     * Get the calendar folder from exchange
     *
     * @return mixed
     */
    public function getCalendarFolder()
    {
        $folder = $this->getFolderByFolderId($this->_folderId->Id);
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
                    'Id' => $this->_folderId->Id,
                    'ChangeKey' => $this->_folderId->ChangeKey
                )
            )
        );

        $request = array_merge($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->FindItem($request);
        return $response->ResponseMessages->FindItemResponseMessage->RootFolder->Items->CalendarItem;
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
        return parent::listItemChanges($this->_folderId->Id, $syncState, $options);
    }
}
