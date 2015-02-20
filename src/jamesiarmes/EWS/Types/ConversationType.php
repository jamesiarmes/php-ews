<?php
/**
 * Contains ConversationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a single conversation.
 *
 * @package jamesiarmes\EWS\Types
 */
class ConversationType extends EWSType
{
    /**
     * Contains a collection of strings that identify the categories that are
     * applied to all conversation items in the current folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfStringsType
     */
    public $Categories;

    /**
     * Represents the identifier of a conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var ItemIdType
     */
    public $ConversationId;

    /**
     * Represents the conversation topic.
     *
     * This element is read-only.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $ConversationTopic;

    /**
     * Contains the aggregated flag status for conversation items in the current
     * folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var FlagStatusType
     */
    public $FlagStatus;

    /**
     * Contains the category list for all conversation items in a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfStringsType
     */
    public $GlobalCategories;

    /**
     * Contains the aggregated flag status for all conversation items in a
     * mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var FlagStatusType
     */
    public $GlobalFlagStatus;

    /**
     * Contains a value that indicates whether at least one conversation item in
     * a mailbox has an attachment.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $GlobalHasAttachments;

    /**
     * Contains the aggregated importance for all conversation items in a
     * mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var ImportanceChoicesType
     */
    public $GlobalImportance;

    /**
     * Contains a list of item classes that represents all the item classes of
     * the conversation items in a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfItemClassType
     */
    public $GlobalItemClasses;

    /**
     * Contains the collection of item identifiers for all conversation items in
     * a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $GlobalItemIds;

    /**
     * Contains the delivery time of the message that was last received in this
     * conversation across all folders in the mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $GlobalLastDeliveryTime;

    /**
     * Contains the total number of conversation items in the mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var integer
     */
    public $GlobalMessageCount;

    /**
     * Contains the size of the conversation calculated from the size of all
     * conversation items in the mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var integer
     */
    public $GlobalSize;

    /**
     * Contains the recipient list of a conversation aggregated across a
     * mailbox.
     *
     * This element is read-only.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfStringsType
     */
    public $GlobalUniqueRecipients;

    /**
     * Contains a list of all the senders of conversation items in the mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfStringsType
     */
    public $GlobalUniqueSenders;

    /**
     * Contains a list of all the people who have sent messages that are
     * currently unread in this conversation across all folders in the mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfStringsType
     */
    public $GlobalUniqueUnreadSenders;

    /**
     * Contains a count of all the unread conversation items in the mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var integer
     */
    public $GlobalUnreadCount;

    /**
     * Contains a value that indicates whether at least one conversation item in
     * the current folder has an attachment.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $HasAttachments;

    /**
     * Contains the aggregated importance for all conversation items in the
     * current folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var ImportanceChoicesType
     */
    public $Importance;

    /**
     * Contains a list of item classes that represents all the item classes of
     * the conversation items in the current folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfItemClassType
     */
    public $ItemClasses;

    /**
     * Contains the collection of item identifiers for all conversation items in
     * the current folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * Contains the delivery time of the message that was last received in this
     * conversation in the current folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $LastDeliveryTime;

    /**
     * Contains the total number of conversation items in the current folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var integer
     */
    public $MessageCount;

    /**
     * Contains the conversation size calculated from the size of all
     * conversation items in the current folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var integer
     */
    public $Size;

    /**
     * Contains the recipient list of a conversation aggregated from a
     * particular folder.
     *
     * This element is read-only.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfStringsType
     */
    public $UniqueRecipients;

    /**
     * Contains a list of all the senders of conversation items in the current
     * folder.
     *
     * This element is read-only.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfStringsType
     */
    public $UniqueSenders;

    /**
     * Contains a list of all the people who have sent messages that are
     * currently unread in this conversation in the current folder.
     *
     * This element is read-only.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfStringsType
     */
    public $UniqueUnreadSenders;

    /**
     * Contains the count of unread conversation items within a folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var integer
     */
    public $UnreadCount;
}
