<?php

namespace jamesiarmes\PEWS\Calendar;

use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\BaseAPI;
use jamesiarmes\PEWS\API\Enumeration;

class API extends BaseAPI
{
    public function createCalendarItems($items)
    {
        $item = array('CalendarItem'=>$items);
        $options = array('SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE);
        $response = $this->createItems($item, $options);

        return $response;
    }

    public function getCalendarFolder()
    {
        $request = array(
            'FolderShape' => array(
                'BaseShape' => array('_' => 'Default')
            ),
            'FolderIds' => array(
                'DistinguishedFolderId' => array(
                    'Id' => 'calendar'
                )
            )
        );
        $request = Type::buildFromArray($request);

        $response =  $this->getClient()->GetFolder($request);
        return $response->ResponseMessages->GetFolderResponseMessage->Folders->CalendarFolder;
    }

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
}