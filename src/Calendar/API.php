<?php

namespace jamesiarmes\PEWS\Calendar;

use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\BaseAPI;
use jamesiarmes\PEWS\API\Enumeration;

/**
 * An API end point for Calendar items
 *
 * Class API
 * @package jamesiarmes\PEWS\Calendar
 */
class API extends BaseAPI
{
    /**
     * Create one or more calendar items
     *
     * @param $items CalendarItem[]|CalendarItem|Array or more calendar items to create
     * @return \jamesiarmes\PEWS\API\CreateItemResponseType
     */
    public function createCalendarItems($items)
    {
        $item = array('CalendarItem'=>$items);
        $options = array('SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE);
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
        $folder = $this->getFolder('calendar');
        return $folder->CalendarFolder;
    }

    /**
     * Get a list of calendar items between two dates/times
     *
     * @param string $start
     * @param string $end
     * @return mixed
     */
    public function getCalendarItems($start = '12:00 AM', $end = '11:59 PM')
    {
        $folder = $this->getCalendarFolder();
        $folderId = $folder->FolderId->Id;
        $changeKey = $folder->FolderId->ChangeKey;

        $start = new \DateTime($start);
        $end = new \DateTime($end);

        $request = array(
            'Traversal' => 'Shallow',
            'ItemShape' => array(
                'BaseShape' => 'Default'
            ),
            'CalendarView' => array(
                'MaxEntriesReturned' => 5,
                'StartDate' => $start->format('c'),
                'EndDate' => $end->format('c')
            ),
            'ParentFolderIds' => array(
                'Id' => $folderId,
                'ChangeKey' => $changeKey,
                'DistinguishedFolderId' => array('Id'=>'calendar')
            )
        );

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
    public function getListOfChanges($syncState = null, $options = array())
    {
        return $this->syncFolderItems('calendar', $syncState, $options);
    }
}
