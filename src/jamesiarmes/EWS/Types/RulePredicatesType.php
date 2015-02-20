<?php
/**
 * Contains RulePredicatesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies the conditions that, when fulfilled, will trigger the rule actions
 * for a rule.
 *
 * @package jamesiarmes\EWS\Types
 */
class RulePredicatesType extends EWSType
{
    /**
     * Contains the categories that must be applied to an incoming message in
     * order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $Categories;

    /**
     * Indicates the strings that must appear in the body of incoming messages
     * in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $ContainsBodyStrings;

    /**
     * Indicates the strings that must appear in the headers of incoming
     * messages in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $ContainsHeaderStrings;

    /**
     * Indicates the strings that must appear in either the ToRecipients or
     * CcRecipients properties of incoming messages in order for the condition
     * or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $ContainsRecipientStrings;

    /**
     * Indicates the strings that must appear in the From property of incoming
     * messages in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $ContainsSenderStrings;

    /**
     * Indicates the strings that must appear in either the body or the subject
     * of incoming messages in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $ContainsSubjectOrBodyStrings;

    /**
     * Indicates the strings that must appear in the subject of incoming
     * messages in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $ContainsSubjectStrings;

    /**
     * Specifies the flag for action value that must appear on incoming messages
     * in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var FlaggedForActionType
     */
    public $FlaggedForAction;

    /**
     * Indicates the e-mail addresses from which incoming messages must be sent
     * in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfEmailAddressesType
     */
    public $FromAddresses;

    /**
     * Represents the e-mail account names from which incoming messages have to
     * have been aggregated in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $FromConnectedAccounts;

    /**
     * Indicates whether incoming messages have to have attachments in order for
     * the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $HasAttachments;

    /**
     * Specifies the importance that is stamped on incoming messages in order
     * for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ImportanceChoicesType
     */
    public $Importance;

    /**
     * Indicates whether incoming messages must be approval requests in order
     * for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsApprovalRequest;

    /**
     * Indicates whether incoming messages must be automatic forwards in order
     * for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsAutomaticForward;

    /**
     * Indicates whether incoming messages must be automatic replies in order
     * for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsAutomaticReply;

    /**
     * Indicates whether incoming messages must be S/MIME encrypted in order for
     * the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsEncrypted;

    /**
     * Indicates whether incoming messages must be meeting requests in order for
     * the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsMeetingRequest;

    /**
     * Indicates whether incoming messages must be meeting responses in order
     * for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsMeetingResponse;

    /**
     * Indicates whether incoming messages must be non-delivery reports (NDRs)
     * in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsNDR;

    /**
     * Indicates whether incoming messages must be permission controlled (RMS
     * protected) in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsPermissionControlled;

    /**
     * Indicates whether incoming messages must be read receipts in order for
     * the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsReadReceipt;

    /**
     * Indicates whether incoming messages must be S/MIME signed in order for\
     * the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsSigned;

    /**
     * Indicates whether incoming messages must be voice mail messages in order
     * for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsVoicemail;

    /**
     * Represents the item classes that must be stamped on incoming messages in
     * order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $ItemClasses;

    /**
     * Represents the message classifications that must be stamped on incoming
     * messages in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $MessageClassifications;

    /**
     * Indicates whether the owner of the mailbox must not be in the
     * ToRecipients property of the incoming messages in order for the condition
     * or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $NotSentToMe;

    /**
     * Indicates the sensitivity that must be stamped on incoming messages in
     * order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var SensitivityChoicesType
     */
    public $Sensitivity;

    /**
     * Indicates whether the owner of the mailbox has to be in the CcRecipients
     * property of incoming messages in order for the condition or exception to
     * apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $SentCcMe;

    /**
     * Indicates whether the owner of the mailbox has to be the only one in the
     * ToRecipients property of incoming messages in order for the condition or
     * exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $SentOnlyToMe;

    /**
     * Indicates the e-mail addresses that incoming messages have to have been
     * sent to in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfEmailAddressesType
     */
    public $SentToAddresses;

    /**
     * Indicates whether the owner of the mailbox has to be in the ToRecipients
     * property of incoming messages in order for the condition or exception to
     * apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $SentToMe;

    /**
     * Indicates whether the owner of the mailbox has to be in either a
     * ToRecipients or CcRecipients property of incoming messages in order for
     * the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $SentToOrCcMe;

    /**
     * Specifies the date range within which incoming messages have to have been
     * received in order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var RulePredicateDateRangeType
     */
    public $WithinDateRange;

    /**
     * Specifies the minimum and maximum sizes that incoming messages must be in
     * order for the condition or exception to apply.
     *
     * @since Exchange 2010
     *
     * @var RulePredicateSizeRangeType
     */
    public $WithinSizeRange;
}
