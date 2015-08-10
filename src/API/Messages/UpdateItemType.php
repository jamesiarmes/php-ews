<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing UpdateItemType
 *
 *
 * XSD Type: UpdateItemType
 *
 * @method UpdateItemType getConflictResolution()
 * @method UpdateItemType setConflictResolution($conflictResolution)
 * @method UpdateItemType getMessageDisposition()
 * @method UpdateItemType setMessageDisposition($messageDisposition)
 * @method UpdateItemType getSendMeetingInvitationsOrCancellations()
 * @method UpdateItemType
 * setSendMeetingInvitationsOrCancellations($sendMeetingInvitationsOrCancellations)
 * @method UpdateItemType getSavedItemFolderId()
 * @method UpdateItemType setSavedItemFolderId($savedItemFolderId)
 * @method UpdateItemType getItemChanges()
 * @method UpdateItemType setItemChanges($itemChanges)
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
     * @property array $itemChanges
     */
    protected $itemChanges = null;


}

