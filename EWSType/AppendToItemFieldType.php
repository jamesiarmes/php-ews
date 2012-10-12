<?php
/**
 * Definition of the AppendToItemFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AppendToItemFieldType type
 */
class EWSType_AppendToItemFieldType extends EWSType
{
    /**
     * Item property
     *
     * @var EWSType_ItemType
     */
    public $Item;

    /**
     * Message property
     *
     * @var EWSType_MessageType
     */
    public $Message;

    /**
     * CalendarItem property
     *
     * @var EWSType_CalendarItemType
     */
    public $CalendarItem;

    /**
     * Contact property
     *
     * @var EWSType_ContactItemType
     */
    public $Contact;

    /**
     * DistributionList property
     *
     * @var EWSType_DistributionListType
     */
    public $DistributionList;

    /**
     * MeetingMessage property
     *
     * @var EWSType_MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * MeetingRequest property
     *
     * @var EWSType_MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * MeetingResponse property
     *
     * @var EWSType_MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * MeetingCancellation property
     *
     * @var EWSType_MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Task property
     *
     * @var EWSType_TaskType
     */
    public $Task;

    /**
     * PostItem property
     *
     * @var EWSType_PostItemType
     */
    public $PostItem;
}
