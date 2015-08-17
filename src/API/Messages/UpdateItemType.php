<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing UpdateItemType
 *
 *
 * XSD Type: UpdateItemType
 *
 * @method UpdateItemType getConflictResolution()
 * @method UpdateItemType setConflictResolution(string $conflictResolution)
 * @method UpdateItemType getMessageDisposition()
 * @method UpdateItemType setMessageDisposition(string $messageDisposition)
 * @method UpdateItemType getSendMeetingInvitationsOrCancellations()
 * @method UpdateItemType setSendMeetingInvitationsOrCancellations(string $sendMeetingInvitationsOrCancellations)
 * @method UpdateItemType getSavedItemFolderId()
 * @method UpdateItemType setSavedItemFolderId(\jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $savedItemFolderId)
 * @method UpdateItemType getItemChanges()
 * @method UpdateItemType setItemChanges(array $itemChanges)
 */
class UpdateItemType extends BaseRequestType
{

    /**
     * @property string $conflictResolution
     */
    protected $conflictResolution = null;

    /**
     * @property string $messageDisposition
     */
    protected $messageDisposition = null;

    /**
     * @property string $sendMeetingInvitationsOrCancellations
     */
    protected $sendMeetingInvitationsOrCancellations = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $savedItemFolderId
     */
    protected $savedItemFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemChangeType[] $itemChanges
     */
    protected $itemChanges = null;


}

