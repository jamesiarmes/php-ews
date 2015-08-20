<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RulePredicatesType
 *
 * Rule predicates, used as rule conditions or exceptions
 * XSD Type: RulePredicatesType
 *
 * @method array getCategories()
 * @method RulePredicatesType setCategories(array $categories)
 * @method array getContainsBodyStrings()
 * @method RulePredicatesType setContainsBodyStrings(array $containsBodyStrings)
 * @method array getContainsHeaderStrings()
 * @method RulePredicatesType setContainsHeaderStrings(array $containsHeaderStrings)
 * @method array getContainsRecipientStrings()
 * @method RulePredicatesType setContainsRecipientStrings(array $containsRecipientStrings)
 * @method array getContainsSenderStrings()
 * @method RulePredicatesType setContainsSenderStrings(array $containsSenderStrings)
 * @method array getContainsSubjectOrBodyStrings()
 * @method RulePredicatesType setContainsSubjectOrBodyStrings(array $containsSubjectOrBodyStrings)
 * @method array getContainsSubjectStrings()
 * @method RulePredicatesType setContainsSubjectStrings(array $containsSubjectStrings)
 * @method string getFlaggedForAction()
 * @method RulePredicatesType setFlaggedForAction(string $flaggedForAction)
 * @method array getFromAddresses()
 * @method RulePredicatesType setFromAddresses(array $fromAddresses)
 * @method array getFromConnectedAccounts()
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
 * @method array getItemClasses()
 * @method RulePredicatesType setItemClasses(array $itemClasses)
 * @method array getMessageClassifications()
 * @method RulePredicatesType setMessageClassifications(array $messageClassifications)
 * @method boolean getNotSentToMe()
 * @method RulePredicatesType setNotSentToMe(boolean $notSentToMe)
 * @method boolean getSentCcMe()
 * @method RulePredicatesType setSentCcMe(boolean $sentCcMe)
 * @method boolean getSentOnlyToMe()
 * @method RulePredicatesType setSentOnlyToMe(boolean $sentOnlyToMe)
 * @method array getSentToAddresses()
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
