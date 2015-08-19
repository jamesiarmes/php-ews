<?php
/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 17-7-15
 * Time: 13:03
 */

namespace jamesiarmes\PEWS\API;

class ClassMap
{
    public static function getClassMap()
    {
        return [
            'CalendarItemType' => '\jamesiarmes\PEWS\API\Type\CalendarItem',
            'BodyType' => '\jamesiarmes\PEWS\API\Type\Body',
            'MessageType' => '\jamesiarmes\PEWS\API\Type\Message',
            'ParentFolderIds' => '\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType',
            'Mailbox' => '\jamesiarmes\PEWS\API\Type\MailboxData',
            'EmailAddress' => '\jamesiarmes\PEWS\API\Type\EmailAddressType',
            'DistinguishedFolderId' => '\jamesiarmes\PEWS\API\Type\DistinguishedFolderIdType'
        ];
    }
}
