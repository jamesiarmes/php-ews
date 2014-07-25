<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the CreateItemType type
 */
class CreateItemType extends DataType
{
    /**
     * SavedItemFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * Items property
     *
     * @var NonEmptyArrayOfAllItemsType
     */
    public $Items;

    /**
     * MessageDisposition property
     *
     * @var MessageDispositionType
     */
    public $MessageDisposition;

    /**
     * SendMeetingInvitations property
     *
     * @var CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingInvitations;
}
