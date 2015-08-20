<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RulePredicatesType
 *
 * Rule predicates, used as rule conditions or exceptions
 * XSD Type: RulePredicatesType
 *
 * @method RulePredicatesType addCategories(string $categories)
 * @method string[] getCategories()
 * @method RulePredicatesType setCategories(array $categories)
 * @method RulePredicatesType addContainsBodyStrings(string $containsBodyStrings)
 * @method string[] getContainsBodyStrings()
 * @method RulePredicatesType setContainsBodyStrings(array $containsBodyStrings)
 * @method RulePredicatesType addContainsHeaderStrings(string $containsHeaderStrings)
 * @method string[] getContainsHeaderStrings()
 * @method RulePredicatesType setContainsHeaderStrings(array $containsHeaderStrings)
 * @method RulePredicatesType addContainsRecipientStrings(string $containsRecipientStrings)
 * @method string[] getContainsRecipientStrings()
 * @method RulePredicatesType setContainsRecipientStrings(array $containsRecipientStrings)
 * @method RulePredicatesType addContainsSenderStrings(string $containsSenderStrings)
 * @method string[] getContainsSenderStrings()
 * @method RulePredicatesType setContainsSenderStrings(array $containsSenderStrings)
 * @method RulePredicatesType addContainsSubjectOrBodyStrings(string $containsSubjectOrBodyStrings)
 * @method string[] getContainsSubjectOrBodyStrings()
 * @method RulePredicatesType setContainsSubjectOrBodyStrings(array $containsSubjectOrBodyStrings)
 * @method RulePredicatesType addContainsSubjectStrings(string $containsSubjectStrings)
 * @method string[] getContainsSubjectStrings()
 * @method RulePredicatesType setContainsSubjectStrings(array $containsSubjectStrings)
 * @method string getFlaggedForAction()
 * @method RulePredicatesType setFlaggedForAction(string $flaggedForAction)
 * @method RulePredicatesType addFromAddresses(EmailAddressType $fromAddresses)
 * @method EmailAddressType[] getFromAddresses()
 * @method RulePredicatesType setFromAddresses(array $fromAddresses)
 * @method RulePredicatesType addFromConnectedAccounts(string $fromConnectedAccounts)
 * @method string[] getFromConnectedAccounts()
 * @method RulePredicatesType setFromConnectedAccounts(array $fromConnectedAccounts)
 * @method boolean getHasAttachments()
 * @method RulePredicatesType setHasAttachments(boolean $hasAttachments)
 * @method string getImportance()
 * @method RulePredicatesType setImportance(string $importance)
 * @method boolean getIsApprovalRequest()
 * @method RulePredicatesType setIsApprovalRequest(boolean $isApprovalRequest)
 * @method boolean getIsAutomaticForward()
 * @method RulePredicatesType setIsAutomaticForward(boolean $isAutomaticForward)
 * @method boolean getIsAutomaticReply()
 * @method RulePredicatesType setIsAutomaticReply(boolean $isAutomaticReply)
 * @method boolean getIsEncrypted()
 * @method RulePredicatesType setIsEncrypted(boolean $isEncrypted)
 * @method boolean getIsMeetingRequest()
 * @method RulePredicatesType setIsMeetingRequest(boolean $isMeetingRequest)
 * @method boolean getIsMeetingResponse()
 * @method RulePredicatesType setIsMeetingResponse(boolean $isMeetingResponse)
 * @method boolean getIsNDR()
 * @method RulePredicatesType setIsNDR(boolean $isNDR)
 * @method boolean getIsPermissionControlled()
 * @method RulePredicatesType setIsPermissionControlled(boolean $isPermissionControlled)
 * @method boolean getIsReadReceipt()
 * @method RulePredicatesType setIsReadReceipt(boolean $isReadReceipt)
 * @method boolean getIsSigned()
 * @method RulePredicatesType setIsSigned(boolean $isSigned)
 * @method boolean getIsVoicemail()
 * @method RulePredicatesType setIsVoicemail(boolean $isVoicemail)
 * @method RulePredicatesType addItemClasses(string $itemClasses)
 * @method string[] getItemClasses()
 * @method RulePredicatesType setItemClasses(array $itemClasses)
 * @method RulePredicatesType addMessageClassifications(string $messageClassifications)
 * @method string[] getMessageClassifications()
 * @method RulePredicatesType setMessageClassifications(array $messageClassifications)
 * @method boolean getNotSentToMe()
 * @method RulePredicatesType setNotSentToMe(boolean $notSentToMe)
 * @method boolean getSentCcMe()
 * @method RulePredicatesType setSentCcMe(boolean $sentCcMe)
 * @method boolean getSentOnlyToMe()
 * @method RulePredicatesType setSentOnlyToMe(boolean $sentOnlyToMe)
 * @method RulePredicatesType addSentToAddresses(EmailAddressType $sentToAddresses)
 * @method EmailAddressType[] getSentToAddresses()
 * @method RulePredicatesType setSentToAddresses(array $sentToAddresses)
 * @method boolean getSentToMe()
 * @method RulePredicatesType setSentToMe(boolean $sentToMe)
 * @method boolean getSentToOrCcMe()
 * @method RulePredicatesType setSentToOrCcMe(boolean $sentToOrCcMe)
 * @method string getSensitivity()
 * @method RulePredicatesType setSensitivity(string $sensitivity)
 * @method RulePredicateDateRangeType getWithinDateRange()
 * @method RulePredicatesType setWithinDateRange(RulePredicateDateRangeType $withinDateRange)
 * @method RulePredicateSizeRangeType getWithinSizeRange()
 * @method RulePredicatesType setWithinSizeRange(RulePredicateSizeRangeType $withinSizeRange)
 */
class RulePredicatesType extends Type
{

    /**
     * @var string[]
     */
    protected $categories = null;

    /**
     * @var string[]
     */
    protected $containsBodyStrings = null;

    /**
     * @var string[]
     */
    protected $containsHeaderStrings = null;

    /**
     * @var string[]
     */
    protected $containsRecipientStrings = null;

    /**
     * @var string[]
     */
    protected $containsSenderStrings = null;

    /**
     * @var string[]
     */
    protected $containsSubjectOrBodyStrings = null;

    /**
     * @var string[]
     */
    protected $containsSubjectStrings = null;

    /**
     * @var string
     */
    protected $flaggedForAction = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $fromAddresses = null;

    /**
     * @var string[]
     */
    protected $fromConnectedAccounts = null;

    /**
     * @var boolean
     */
    protected $hasAttachments = null;

    /**
     * @var string
     */
    protected $importance = null;

    /**
     * @var boolean
     */
    protected $isApprovalRequest = null;

    /**
     * @var boolean
     */
    protected $isAutomaticForward = null;

    /**
     * @var boolean
     */
    protected $isAutomaticReply = null;

    /**
     * @var boolean
     */
    protected $isEncrypted = null;

    /**
     * @var boolean
     */
    protected $isMeetingRequest = null;

    /**
     * @var boolean
     */
    protected $isMeetingResponse = null;

    /**
     * @var boolean
     */
    protected $isNDR = null;

    /**
     * @var boolean
     */
    protected $isPermissionControlled = null;

    /**
     * @var boolean
     */
    protected $isReadReceipt = null;

    /**
     * @var boolean
     */
    protected $isSigned = null;

    /**
     * @var boolean
     */
    protected $isVoicemail = null;

    /**
     * @var string[]
     */
    protected $itemClasses = null;

    /**
     * @var string[]
     */
    protected $messageClassifications = null;

    /**
     * @var boolean
     */
    protected $notSentToMe = null;

    /**
     * @var boolean
     */
    protected $sentCcMe = null;

    /**
     * @var boolean
     */
    protected $sentOnlyToMe = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $sentToAddresses = null;

    /**
     * @var boolean
     */
    protected $sentToMe = null;

    /**
     * @var boolean
     */
    protected $sentToOrCcMe = null;

    /**
     * @var string
     */
    protected $sensitivity = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RulePredicateDateRangeType
     */
    protected $withinDateRange = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RulePredicateSizeRangeType
     */
    protected $withinSizeRange = null;
}
