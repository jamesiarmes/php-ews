<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing CreateItemType
 *
 *
 * XSD Type: CreateItemType
 *
 * @method string getMessageDisposition()
 * @method CreateItemType setMessageDisposition(string $messageDisposition)
 * @method string getSendMeetingInvitations()
 * @method CreateItemType setSendMeetingInvitations(string $sendMeetingInvitations)
 * @method \jamesiarmes\PEWS\API\Type\TargetFolderIdType getSavedItemFolderId()
 * @method CreateItemType setSavedItemFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $savedItemFolderId)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAllItemsType getItems()
 * @method CreateItemType setItems(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAllItemsType $items)
 */
class CreateItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $messageDisposition = null;

    /**
     * @var string
     */
    protected $sendMeetingInvitations = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAllItemsType
     */
    protected $items = null;
}
