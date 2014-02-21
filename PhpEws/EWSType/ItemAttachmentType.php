<?php
/**
 * Definition of the ItemAttachmentType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ItemAttachmentType type
 */
class ItemAttachmentType extends PhpEws\EWSType
{
    /**
     * Item property
     *
     * @var ItemType
     */
    public $Item;

    /**
     * Message property
     *
     * @var MessageType
     */
    public $Message;

    /**
     * CalendarItem property
     *
     * @var CalendarItemType
     */
    public $CalendarItem;

    /**
     * Contact property
     *
     * @var ContactItemType
     */
    public $Contact;

    /**
     * MeetingMessage property
     *
     * @var MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * MeetingRequest property
     *
     * @var MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * MeetingResponse property
     *
     * @var MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * MeetingCancellation property
     *
     * @var MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Task property
     *
     * @var TaskType
     */
    public $Task;

    /**
     * PostItem property
     *
     * @var PostItemType
     */
    public $PostItem;
}
