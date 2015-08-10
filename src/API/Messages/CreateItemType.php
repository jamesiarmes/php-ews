<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing CreateItemType
 *
 *
 * XSD Type: CreateItemType
 *
 * @method CreateItemType getMessageDisposition()
 * @method CreateItemType setMessageDisposition($messageDisposition)
 * @method CreateItemType getSendMeetingInvitations()
 * @method CreateItemType setSendMeetingInvitations($sendMeetingInvitations)
 * @method CreateItemType getSavedItemFolderId()
 * @method CreateItemType setSavedItemFolderId($savedItemFolderId)
 * @method CreateItemType getItems()
 * @method CreateItemType setItems($items)
 */
class CreateItemType extends BaseRequestType
{

    /**
     * @property string $messageDisposition
     */
    protected $messageDisposition = null;

    /**
     * @property string $sendMeetingInvitations
     */
    protected $sendMeetingInvitations = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $savedItemFolderId
     */
    protected $savedItemFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfAllItemsType $items
     */
    protected $items = null;


}

