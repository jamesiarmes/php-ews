<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the CreateItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CreateItemType type
 */
class CreateItemType extends DataType
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
