<?php
/**
 * Definition of the UpdateItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the UpdateItemType type
 */
class EWSType_UpdateItemType extends EWSType
{
    /**
     * SavedItemFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * ItemChanges property
     *
     * @var EWSType_NonEmptyArrayOfItemChangesType
     */
    public $ItemChanges;

    /**
     * ConflictResolution property
     *
     * @var EWSType_ConflictResolutionType
     */
    public $ConflictResolution;

    /**
     * MessageDisposition property
     *
     * @var EWSType_MessageDispositionType
     */
    public $MessageDisposition;

    /**
     * SendMeetingInvitationsOrCancellations property
     *
     * @var EWSType_CalendarItemUpdateOperationType
     */
    public $SendMeetingInvitationsOrCancellations;
}
