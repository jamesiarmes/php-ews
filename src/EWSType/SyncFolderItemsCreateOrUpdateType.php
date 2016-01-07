<?php
/**
 * Contains EWSType_SyncFolderItemsCreateOrUpdateType.
 */

/**
 * Identifies a single item to create in the local client store.
 *
 * @package php-ews\Types
 */
class EWSType_SyncFolderItemsCreateOrUpdateType extends EWSType
{
    /**
     * Represents an Exchange calendar item to create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item to create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ContactItemType
     */
    public $Contact;

    /**
     * Represents a distribution list to create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DistributionListType
     */
    public $DistributionList;

    /**
     * Represents a generic Exchange item to create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation to create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message to create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request to create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response to create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message to create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MessageType
     */
    public $Message;

    /**
     * Represents a task to create.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TaskType
     */
    public $Task;
}
