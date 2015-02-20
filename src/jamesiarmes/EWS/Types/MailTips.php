<?php
/**
 * Contains MailTips.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents values for various types of mail tips.
 *
 * @package jamesiarmes\EWS\Types
 */
class MailTips extends EWSType
{
    /**
     * Represents a customized mail tip message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $CustomMailTip;

    /**
     * Indicates whether delivery restrictions will prevent the sender’s message
     * from reaching the recipient.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $DeliveryRestricted;

    /**
     * Represents the count of external members in a group.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $ExternalMemberCount;

    /**
     * Indicates whether the recipient is invalid.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $InvalidRecipient;

    /**
     * Indicates whether the recipient's mailbox is being moderated.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsModerated;

    /**
     * Indicates whether the mailbox for the recipient is full.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $MailboxFull;

    /**
     * Represents the maximum message size the recipient can accept.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $MaxMessageSize;

    /**
     * Represents the response message and a duration time for sending the
     * response message.
     *
     * @since Exchange 2010
     *
     * @var OutOfOfficeMailTip
     */
    public $OutOfOffice;

    /**
     * Indicates that the mail tips in this element could not be evaluated
     * before the server's processing timeout expired.
     *
     * @since Exchange 2010
     *
     * @var MailTipTypes
     */
    public $PendingMailTips;

    /**
     * Represents the mailbox of the recipient.
     *
     * @since Exchange 2010
     *
     * @var EmailAddressType
     */
    public $RecipientAddress;

    /**
     * Represents the count of all members in a group.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $TotalMemberCount;
}
