<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UpdateItemType
 *
 *
 * XSD Type: UpdateItemType
 *
 * @method string getConflictResolution()
 * @method UpdateItemType setConflictResolution(string $conflictResolution)
 * @method string getMessageDisposition()
 * @method UpdateItemType setMessageDisposition(string $messageDisposition)
 * @method string getSendMeetingInvitationsOrCancellations()
 * @method UpdateItemType setSendMeetingInvitationsOrCancellations(string $sendMeetingInvitationsOrCancellations)
 * @method \jamesiarmes\PEWS\API\Type\TargetFolderIdType getSavedItemFolderId()
 * @method UpdateItemType setSavedItemFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $savedItemFolderId)
 * @method array getItemChanges()
 * @method UpdateItemType setItemChanges(array $itemChanges)
 */
class UpdateItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $conflictResolution = null;

    /**
     * @var string
     */
    protected $messageDisposition = null;

    /**
     * @var string
     */
    protected $sendMeetingInvitationsOrCancellations = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemChangeType[]
     */
    protected $itemChanges = null;
}
