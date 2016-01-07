<?php
/**
 * Contains EWSType_CreateItemType.
 */

/**
 * Defines a request to create an item in the Exchange store.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_CreateItemType extends EWSType
{
    /**
     * Contains an array of items to create in the folder that is identified by
     * the SavedItemFolderId element.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfAllItemsType
     */
    public $Items;

    /**
     * Describes how the item will be handled after it is created.
     *
     * This attribute is only applicable to e-mail messages.
     *
     * The attribute is required for e-mail messages.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MessageDispositionType
     */
    public $MessageDisposition;

    /**
     * Identifies the target folder where a new item can be created.
     *
     * If the MessageDisposition attribute is set to SendOnly, a created message
     * will only be sent. The message will not be put in the folder that is
     * identified by the SavedItemFolderId element.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * Describes how meeting requests are handled after they are created.
     *
     * This attribute is required for calendar items.
     *
     * @since Exchange 2007
     *
     * @var EWSType_CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingInvitations;
}
