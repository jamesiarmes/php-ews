<?php
/**
 * Definition of the SetItemFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SetItemFieldType type
 */
class EWSType_SetItemFieldType extends EWSType
{
    /**
     * Represents an Exchange calendar item to update.
     *
     * @var EWSType_CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item to update.
     *
     * @var EWSType_ContactItemType
     */
    public $Contact;

    /**
     * Represents a distribution list to update.
     *
     * @var EWSType_DistributionListType
     */
    public $DistributionList;

    /**
     * Identifies extended MAPI properties to set.
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Represents an item in the Exchange store.
     *
     * @var EWSType_ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation to update.
     *
     * @var EWSType_MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message to update.
     *
     * @var EWSType_MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request to update.
     *
     * @var EWSType_MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response to update.
     *
     * @var EWSType_MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message to update.
     *
     * @var EWSType_MessageType
     */
    public $Message;

    /**
     * represents a post item in the Exchange store.
     *
     * @var EWSType_PostItemType
     */
    public $PostItem;

    /**
     * Represents a task to update.
     *
     * @var EWSType_TaskType
     */
    public $Task;
}
