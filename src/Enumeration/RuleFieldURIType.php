<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\RuleFieldURIType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the URI to the rule field that caused a validation error.
 *
 * @package php-ews\Enumeration
 */
class RuleFieldURIType extends Enumeration
{
    /**
     * Specifies the Action:AssignCategories field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_ASSIGN_CATEGORIES = 'Action:AssignCategories';

    /**
     * Specifies the Action:CopyToFolder field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_COPY_TO_FOLDER = 'Action:CopyToFolder';

    /**
     * Specifies the Action:Delete field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_DELETE = 'Action:Delete';

    /**
     * Specifies the Action:ForwardAsAttachmentToRecipients field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_FORWARD_AS_ATTACHMENT_TO_RECIPIENTS = 'Action:ForwardAsAttachmentToRecipients';

    /**
     * Specifies the Action:ForwardToRecipients field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_FORWARD_TO_RECIPIENTS = 'Action:ForwardToRecipients';

    /**
     * Specifies the Action:MarkAsRead field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_MARK_AS_READ = 'Action:MarkAsRead';

    /**
     * Specifies the Action:MarkImportance field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_MARK_IMPORTANCE = 'Action:MarkImportance';

    /**
     * Specifies the Action:MoveToFolder field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_MOVE_TO_FOLDER = 'Action:MoveToFolder';

    /**
     * Specifies the Action:PermanentDelete field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_PERMANENT_DELETE = 'Action:PermanentDelete';

    /**
     * Specifies the Action:RedirectToRecipients field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_REDIRECT_TO_RECIPIENTS = 'Action:RedirectToRecipients';

    /**
     * Specifies the Action:SendSMSAlertToRecipients field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_SEND_SMS_ALERT_TO_RECIPIENTS = 'Action:SendSMSAlertToRecipients';

    /**
     * Specifies the Action:ServerReplyWithMessage field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_SERVER_REPLY_WITH_MESSAGE = 'Action:ServerReplyWithMessage';

    /**
     * Specifies the Action:StopProcessingRules field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTION_STOP_PROCESSING_RULES = 'Action:StopProcessingRules';

    /**
     * Specifies the Actions field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACTIONS = 'Actions';

    /**
     * Specifies the Condition:Categories field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_CATEGORIES = 'Condition:Categories';

    /**
     * Specifies the Condition:ContainsBodyStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_CONTAINS_BODY_STRINGS = 'Condition:ContainsBodyStrings';

    /**
     * Specifies the Condition:ContainsHeaderStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_CONTAINS_HEADER_STRINGS = 'Condition:ContainsHeaderStrings';

    /**
     * Specifies the Condition:ContainsRecipientStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_CONTAINS_RECIPIENT_STRINGS = 'Condition:ContainsRecipientStrings';

    /**
     * Specifies the Condition:ContainsSenderStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_CONTAINS_SENDER_STRINGS = 'Condition:ContainsSenderStrings';

    /**
     * Specifies the Condition:ContainsSubjectOrBodyStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_CONTAINS_SUBJECT_OR_BODY_STRINGS = 'Condition:ContainsSubjectOrBodyStrings';

    /**
     * Specifies the Condition:ContainsSubjectStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_CONTAINS_SUBJECT_STRINGS = 'Condition:ContainsSubjectStrings';

    /**
     * Specifies the Condition:FlaggedForAction field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_FLAGGED_FOR_ACTION = 'Condition:FlaggedForAction';

    /**
     * Specifies the Condition:FromAddresses field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_FROM_ADDRESSES = 'Condition:FromAddresses';

    /**
     * Specifies the Condition:FromConnectedAccounts field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_FROM_CONNECTED_ACCOUNTS = 'Condition:FromConnectedAccounts';

    /**
     * Specifies the Condition:HasAttachments field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_HAS_ATTACHMENTS = 'Condition:HasAttachments';

    /**
     * Specifies the Condition:Importance field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IMPORTANCE = 'Condition:Importance';

    /**
     * Specifies the Condition:IsApprovalRequest field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IS_APPROVAL_REQUEST = 'Condition:IsApprovalRequest';

    /**
     * Specifies the Condition:IsAutomaticForward field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IS_AUTOMATIC_FORWARD = 'Condition:IsAutomaticForward';

    /**
     * Specifies the Condition:IsAutomaticReply field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IS_AUTOMATIC_REPLY = 'Condition:IsAutomaticReply';

    /**
     * Specifies the Condition:IsEncrypted field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IS_ENCRYPTED = 'Condition:IsEncrypted';

    /**
     * Specifies the Condition:IsMeetingRequest field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IS_MEETING_REQUEST = 'Condition:IsMeetingRequest';

    /**
     * Specifies the Condition:IsMeetingResponse field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IS_MEETING_RESPONSE = 'Condition:IsMeetingResponse';

    /**
     * Specifies the Condition:IsNDR field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IS_NDR = 'Condition:IsNDR';

    /**
     * Specifies the Condition:IsPermissionControlled field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IS_PERMISSION_CONTROLLED = 'Condition:IsPermissionControlled';

    /**
     * Specifies the Condition:IsReadReceipt field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IS_READ_RECEIPT = 'Condition:IsReadReceipt';

    /**
     * Specifies the Condition:IsSigned field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IS_SIGNED = 'Condition:IsSigned';

    /**
     * Specifies the Condition:IsVoicemail field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_IS_VOICEMAIL = 'Condition:IsVoicemail';

    /**
     * Specifies the Condition:ItemClasses field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_ITEM_CLASSES = 'Condition:ItemClasses';

    /**
     * Specifies the Condition:MessageClassifications field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_MESSAGE_CLASSIFICATIONS = 'Condition:MessageClassifications';

    /**
     * Specifies the Condition:NotSentToMe field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_NOT_SENT_TO_ME = 'Condition:NotSentToMe';

    /**
     * Specifies the Condition:Sensitivity field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_SENSITIVITY = 'Condition:Sensitivity';

    /**
     * Specifies the Condition:SentCcMe field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_SENT_CC_ME = 'Condition:SentCcMe';

    /**
     * Specifies the Condition:SentOnlyToMe field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_SENT_ONLY_TO_ME = 'Condition:SentOnlyToMe';

    /**
     * Specifies the Condition:SentToAddresses field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_SENT_TO_ADDRESSES = 'Condition:SentToAddresses';

    /**
     * Specifies the Condition:SentToMe field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_SENT_TO_ME = 'Condition:SentToMe';

    /**
     * Specifies the Condition:SentToOrCcMe field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_SENT_TO_OR_CC_ME = 'Condition:SentToOrCcMe';

    /**
     * Specifies the Condition:WithinDateRange field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_WITHIN_DATE_RANGE = 'Condition:WithinDateRange';

    /**
     * Specifies the Condition:WithinSizeRange field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITION_WITHIN_SIZE_RANGE = 'Condition:WithinSizeRange';

    /**
     * Specifies the Conditions field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONDITIONS = 'Conditions';

    /**
     * Specifies the DisplayName field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DISPLAY_NAME = 'DisplayName';

    /**
     * Specifies the Exception:Categories field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_CATEGORIES = 'Exception:Categories';

    /**
     * Specifies the Exception:ContainsBodyStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_CONTAINS_BODY_STRINGS = 'Exception:ContainsBodyStrings';

    /**
     * Specifies the Exception:ContainsHeaderStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_CONTAINS_HEADER_STRINGS = 'Exception:ContainsHeaderStrings';

    /**
     * Specifies the Exception:ContainsRecipientStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_CONTAINS_RECIPIENT_STRINGS = 'Exception:ContainsRecipientStrings';

    /**
     * Specifies the Exception:ContainsSenderStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_CONTAINS_SENDER_STRINGS = 'Exception:ContainsSenderStrings';

    /**
     * Specifies the Exception:ContainsSubjectOrBodyStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_CONTAINS_SUBJECT_OR_BODY_STRINGS = 'Exception:ContainsSubjectOrBodyStrings';

    /**
     * Specifies the Exception:ContainsSubjectStrings field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_CONTAINS_SUBJECT_STRINGS = 'Exception:ContainsSubjectStrings';

    /**
     * Specifies the Exception:FlaggedForAction field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_FLAGGED_FOR_ACTION = 'Exception:FlaggedForAction';

    /**
     * Specifies the Exception:FromAddresses field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_FROM_ADDRESSES = 'Exception:FromAddresses';

    /**
     * Specifies the Exception:FromConnectedAccounts field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_FROM_CONNECTED_ACCOUNTS = 'Exception:FromConnectedAccounts';

    /**
     * Specifies the Exception:HasAttachments field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_HAS_ATTACHMENTS = 'Exception:HasAttachments';

    /**
     * Specifies the Exception:Importance field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IMPORTANCE = 'Exception:Importance';

    /**
     * Specifies the Exception:IsApprovalRequest field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IS_APPROVAL_REQUEST = 'Exception:IsApprovalRequest';

    /**
     * Specifies the Exception:IsAutomaticForward field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IS_AUTOMATIC_FORWARD = 'Exception:IsAutomaticForward';

    /**
     * Specifies the Exception:IsAutomaticReply field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IS_AUTOMATIC_REPLY = 'Exception:IsAutomaticReply';

    /**
     * Specifies the Exception:IsEncrypted field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IS_ENCRYPTED = 'Exception:IsEncrypted';

    /**
     * Specifies the Exception:IsMeetingRequest field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IS_MEETING_REQUEST = 'Exception:IsMeetingRequest';

    /**
     * Specifies the Exception:IsMeetingResponse field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IS_MEETING_RESPONSE = 'Exception:IsMeetingResponse';

    /**
     * Specifies the Exception:IsNDR field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IS_NDR = 'Exception:IsNDR';

    /**
     * Specifies the Exception:IsPermissionControlled field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IS_PERMISSION_CONTROLLED = 'Exception:IsPermissionControlled';

    /**
     * Specifies the Exception:IsReadReceipt field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IS_READ_RECEIPT = 'Exception:IsReadReceipt';

    /**
     * Specifies the Exception:IsSigned field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IS_SIGNED = 'Exception:IsSigned';

    /**
     * Specifies the Exception:IsVoicemail field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_IS_VOICEMAIL = 'Exception:IsVoicemail';

    /**
     * Specifies the Exception:ItemClasses field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_ITEM_CLASSES = 'Exception:ItemClasses';

    /**
     * Specifies the Exception:MessageClassifications field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_MESSAGE_CLASSIFICATIONS = 'Exception:MessageClassifications';

    /**
     * Specifies the Exception:NotSentToMe field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_NOT_SENT_TO_ME = 'Exception:NotSentToMe';

    /**
     * Specifies the Exception:Sensitivity field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_SENSITIVITY = 'Exception:Sensitivity';

    /**
     * Specifies the Exception:SentCcMe field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_SENT_CC_ME = 'Exception:SentCcMe';

    /**
     * Specifies the Exception:SentOnlyToMe field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_SENT_ONLY_TO_ME = 'Exception:SentOnlyToMe';

    /**
     * Specifies the Exception:SentToAddresses field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_SENT_TO_ADDRESSES = 'Exception:SentToAddresses';

    /**
     * Specifies the Exception:SentToMe field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_SENT_TO_ME = 'Exception:SentToMe';

    /**
     * Specifies the Exception:SentToOrCcMe field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_SENT_TO_OR_CC_ME = 'Exception:SentToOrCcMe';

    /**
     * Specifies the Exception:WithinDateRange field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_WITHIN_DATE_RANGE = 'Exception:WithinDateRange';

    /**
     * Specifies the Exception:WithinSizeRange field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTION_WITHIN_SIZE_RANGE = 'Exception:WithinSizeRange';

    /**
     * Specifies the Exceptions field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEPTIONS = 'Exceptions';

    /**
     * Specifies the IsEnabled field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const IS_ENABLED = 'IsEnabled';

    /**
     * Specifies the IsInError field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const IS_IN_ERROR = 'IsInError';

    /**
     * Specifies the IsNotSupported field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const IS_NOT_SUPPORTED = 'IsNotSupported';

    /**
     * Specifies the Priority field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const PRIORITY = 'Priority';

    /**
     * Specifies the RuleId field.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const RULE_ID = 'RuleId';
}
