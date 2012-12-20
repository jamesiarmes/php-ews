<?php
/**
 * Definition of the CreateItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the CreateItemType type
 */
class CreateItemType extends EWSType
{
    /**
     * SavedItemFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * Items property
     *
     * @var EWSType_NonEmptyArrayOfAllItemsType
     */
    public $Items;

    /**
     * MessageDisposition property
     *
     * @var EWSType_MessageDispositionType
     */
    public $MessageDisposition;

    /**
     * SendMeetingInvitations property
     *
     * @var EWSType_CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingInvitations;
}
