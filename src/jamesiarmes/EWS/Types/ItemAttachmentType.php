<?php
/**
 * Contains ItemAttachmentType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an Exchange item that is attached to another Exchange item.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend AttachmentType.
 */
class ItemAttachmentType extends EWSType
{
    /**
     * Identifies the attachment.
     *
     * @since Exchange 2007
     *
     * @var AttachmentIdType
     */
    public $AttachmentId;

    /**
     * Represents an Exchange calendar item attachment.
     *
     * @since Exchange 2007
     *
     * @var CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item attachment.
     *
     * @since Exchange 2007
     *
     * @var ContactItemType
     */
    public $Contact;

    /**
     * Represents an identifier to the contents of the attachment.
     *
     * ContentId can be set to any string value. Applications can use ContentId
     * to implement their own identification mechanisms.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ContentId;

    /**
     * Describes the Multipurpose Internet Mail Extensions (MIME) type of the
     * attachment content.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ContentType;

    /**
     * Contains the Uniform Resource Identifier (URI) that corresponds to the
     * location of the content of the attachment.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ContentLocation;

    /**
     * Represents whether the attachment appears inline within an item.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsInline;

    /**
     * Represents a generic Exchange item attachment.
     *
     * @since Exchange 2007
     *
     * @var ItemType
     */
    public $Item;

    /**
     * Represents when the attachment was last modified.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $LastModifiedTime;

    /**
     * Represents a meeting cancellation in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message attachment.
     *
     * @since Exchange 2007
     *
     * @var MessageType
     */
    public $Message;

    /**
     * Represents the name of the attachment.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Name;

    /**
     * Represents the size in bytes of the file attachment.
     *
     * This property is read-only.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $Size;

    /**
     * Represents an Exchange task attachment.
     *
     * @since Exchange 2007
     *
     * @var TaskType
     */
    public $Task;
}
