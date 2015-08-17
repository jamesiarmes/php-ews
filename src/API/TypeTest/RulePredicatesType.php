<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing RulePredicatesType
 *
 * Rule predicates, used as rule conditions or exceptions
 * XSD Type: RulePredicatesType
 *
 * @method RulePredicatesType getCategories()
 * @method RulePredicatesType setCategories(array $categories)
 * @method RulePredicatesType getContainsBodyStrings()
 * @method RulePredicatesType setContainsBodyStrings(array $containsBodyStrings)
 * @method RulePredicatesType getContainsHeaderStrings()
 * @method RulePredicatesType setContainsHeaderStrings(array $containsHeaderStrings)
 * @method RulePredicatesType getContainsRecipientStrings()
 * @method RulePredicatesType setContainsRecipientStrings(array $containsRecipientStrings)
 * @method RulePredicatesType getContainsSenderStrings()
 * @method RulePredicatesType setContainsSenderStrings(array $containsSenderStrings)
 * @method RulePredicatesType getContainsSubjectOrBodyStrings()
 * @method RulePredicatesType setContainsSubjectOrBodyStrings(array $containsSubjectOrBodyStrings)
 * @method RulePredicatesType getContainsSubjectStrings()
 * @method RulePredicatesType setContainsSubjectStrings(array $containsSubjectStrings)
 * @method RulePredicatesType getFlaggedForAction()
 * @method RulePredicatesType setFlaggedForAction(string $flaggedForAction)
 * @method RulePredicatesType getFromAddresses()
 * @method RulePredicatesType setFromAddresses(array $fromAddresses)
 * @method RulePredicatesType getFromConnectedAccounts()
 * @method RulePredicatesType setFromConnectedAccounts(array $fromConnectedAccounts)
 * @method RulePredicatesType getHasAttachments()
 * @method RulePredicatesType setHasAttachments(boolean $hasAttachments)
 * @method RulePredicatesType getImportance()
 * @method RulePredicatesType setImportance(string $importance)
 * @method RulePredicatesType getIsApprovalRequest()
 * @method RulePredicatesType setIsApprovalRequest(boolean $isApprovalRequest)
 * @method RulePredicatesType getIsAutomaticForward()
 * @method RulePredicatesType setIsAutomaticForward(boolean $isAutomaticForward)
 * @method RulePredicatesType getIsAutomaticReply()
 * @method RulePredicatesType setIsAutomaticReply(boolean $isAutomaticReply)
 * @method RulePredicatesType getIsEncrypted()
 * @method RulePredicatesType setIsEncrypted(boolean $isEncrypted)
 * @method RulePredicatesType getIsMeetingRequest()
 * @method RulePredicatesType setIsMeetingRequest(boolean $isMeetingRequest)
 * @method RulePredicatesType getIsMeetingResponse()
 * @method RulePredicatesType setIsMeetingResponse(boolean $isMeetingResponse)
 * @method RulePredicatesType getIsNDR()
 * @method RulePredicatesType setIsNDR(boolean $isNDR)
 * @method RulePredicatesType getIsPermissionControlled()
 * @method RulePredicatesType setIsPermissionControlled(boolean $isPermissionControlled)
 * @method RulePredicatesType getIsReadReceipt()
 * @method RulePredicatesType setIsReadReceipt(boolean $isReadReceipt)
 * @method RulePredicatesType getIsSigned()
 * @method RulePredicatesType setIsSigned(boolean $isSigned)
 * @method RulePredicatesType getIsVoicemail()
 * @method RulePredicatesType setIsVoicemail(boolean $isVoicemail)
 * @method RulePredicatesType getItemClasses()
 * @method RulePredicatesType setItemClasses(array $itemClasses)
 * @method RulePredicatesType getMessageClassifications()
 * @method RulePredicatesType setMessageClassifications(array $messageClassifications)
 * @method RulePredicatesType getNotSentToMe()
 * @method RulePredicatesType setNotSentToMe(boolean $notSentToMe)
 * @method RulePredicatesType getSentCcMe()
 * @method RulePredicatesType setSentCcMe(boolean $sentCcMe)
 * @method RulePredicatesType getSentOnlyToMe()
 * @method RulePredicatesType setSentOnlyToMe(boolean $sentOnlyToMe)
 * @method RulePredicatesType getSentToAddresses()
 * @method RulePredicatesType setSentToAddresses(array $sentToAddresses)
 * @method RulePredicatesType getSentToMe()
 * @method RulePredicatesType setSentToMe(boolean $sentToMe)
 * @method RulePredicatesType getSentToOrCcMe()
 * @method RulePredicatesType setSentToOrCcMe(boolean $sentToOrCcMe)
 * @method RulePredicatesType getSensitivity()
 * @method RulePredicatesType setSensitivity(string $sensitivity)
 * @method RulePredicatesType getWithinDateRange()
 * @method RulePredicatesType setWithinDateRange(RulePredicateDateRangeType $withinDateRange)
 * @method RulePredicatesType getWithinSizeRange()
 * @method RulePredicatesType setWithinSizeRange(RulePredicateSizeRangeType $withinSizeRange)
 */
class RulePredicatesType extends TypeTest
{

    /**
     * @property string[] $categories
     */
    protected $categories = null;

    /**
     * @property string[] $containsBodyStrings
     */
    protected $containsBodyStrings = null;

    /**
     * @property string[] $containsHeaderStrings
     */
    protected $containsHeaderStrings = null;

    /**
     * @property string[] $containsRecipientStrings
     */
    protected $containsRecipientStrings = null;

    /**
     * @property string[] $containsSenderStrings
     */
    protected $containsSenderStrings = null;

    /**
     * @property string[] $containsSubjectOrBodyStrings
     */
    protected $containsSubjectOrBodyStrings = null;

    /**
     * @property string[] $containsSubjectStrings
     */
    protected $containsSubjectStrings = null;

    /**
     * @property string $flaggedForAction
     */
    protected $flaggedForAction = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType[] $fromAddresses
     */
    protected $fromAddresses = null;

    /**
     * @property string[] $fromConnectedAccounts
     */
    protected $fromConnectedAccounts = null;

    /**
     * @property boolean $hasAttachments
     */
    protected $hasAttachments = null;

    /**
     * @property string $importance
     */
    protected $importance = null;

    /**
     * @property boolean $isApprovalRequest
     */
    protected $isApprovalRequest = null;

    /**
     * @property boolean $isAutomaticForward
     */
    protected $isAutomaticForward = null;

    /**
     * @property boolean $isAutomaticReply
     */
    protected $isAutomaticReply = null;

    /**
     * @property boolean $isEncrypted
     */
    protected $isEncrypted = null;

    /**
     * @property boolean $isMeetingRequest
     */
    protected $isMeetingRequest = null;

    /**
     * @property boolean $isMeetingResponse
     */
    protected $isMeetingResponse = null;

    /**
     * @property boolean $isNDR
     */
    protected $isNDR = null;

    /**
     * @property boolean $isPermissionControlled
     */
    protected $isPermissionControlled = null;

    /**
     * @property boolean $isReadReceipt
     */
    protected $isReadReceipt = null;

    /**
     * @property boolean $isSigned
     */
    protected $isSigned = null;

    /**
     * @property boolean $isVoicemail
     */
    protected $isVoicemail = null;

    /**
     * @property string[] $itemClasses
     */
    protected $itemClasses = null;

    /**
     * @property string[] $messageClassifications
     */
    protected $messageClassifications = null;

    /**
     * @property boolean $notSentToMe
     */
    protected $notSentToMe = null;

    /**
     * @property boolean $sentCcMe
     */
    protected $sentCcMe = null;

    /**
     * @property boolean $sentOnlyToMe
     */
    protected $sentOnlyToMe = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType[] $sentToAddresses
     */
    protected $sentToAddresses = null;

    /**
     * @property boolean $sentToMe
     */
    protected $sentToMe = null;

    /**
     * @property boolean $sentToOrCcMe
     */
    protected $sentToOrCcMe = null;

    /**
     * @property string $sensitivity
     */
    protected $sensitivity = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RulePredicateDateRangeType
     * $withinDateRange
     */
    protected $withinDateRange = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RulePredicateSizeRangeType
     * $withinSizeRange
     */
    protected $withinSizeRange = null;


}

