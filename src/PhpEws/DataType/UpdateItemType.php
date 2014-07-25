<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the UpdateItemType type
 */
class UpdateItemType extends DataType
{
    /**
     * SavedItemFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * ItemChanges property
     *
     * @var NonEmptyArrayOfItemChangesType
     */
    public $ItemChanges;

    /**
     * ConflictResolution property
     *
     * @var ConflictResolutionType
     */
    public $ConflictResolution;

    /**
     * MessageDisposition property
     *
     * @var MessageDispositionType
     */
    public $MessageDisposition;

    /**
     * SendMeetingInvitationsOrCancellations property
     *
     * @var CalendarItemUpdateOperationType
     */
    public $SendMeetingInvitationsOrCancellations;
}
