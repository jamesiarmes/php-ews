<?php
/**
 * Definition of the CreateItemType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the CreateItemType type
 */
class CreateItemType extends PhpEws\EWSType
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
