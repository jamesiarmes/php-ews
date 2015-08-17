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
 * @method RulePredicatesType setCategories($categories)
 * @method RulePredicatesType getContainsBodyStrings()
 * @method RulePredicatesType setContainsBodyStrings($containsBodyStrings)
 * @method RulePredicatesType getContainsHeaderStrings()
 * @method RulePredicatesType setContainsHeaderStrings($containsHeaderStrings)
 * @method RulePredicatesType getContainsRecipientStrings()
 * @method RulePredicatesType
 * setContainsRecipientStrings($containsRecipientStrings)
 * @method RulePredicatesType getContainsSenderStrings()
 * @method RulePredicatesType setContainsSenderStrings($containsSenderStrings)
 * @method RulePredicatesType getContainsSubjectOrBodyStrings()
 * @method RulePredicatesType
 * setContainsSubjectOrBodyStrings($containsSubjectOrBodyStrings)
 * @method RulePredicatesType getContainsSubjectStrings()
 * @method RulePredicatesType setContainsSubjectStrings($containsSubjectStrings)
 * @method RulePredicatesType getFlaggedForAction()
 * @method RulePredicatesType setFlaggedForAction($flaggedForAction)
 * @method RulePredicatesType getFromAddresses()
 * @method RulePredicatesType setFromAddresses($fromAddresses)
 * @method RulePredicatesType getFromConnectedAccounts()
 * @method RulePredicatesType setFromConnectedAccounts($fromConnectedAccounts)
 * @method RulePredicatesType getHasAttachments()
 * @method RulePredicatesType setHasAttachments($hasAttachments)
 * @method RulePredicatesType getImportance()
 * @method RulePredicatesType setImportance($importance)
 * @method RulePredicatesType getIsApprovalRequest()
 * @method RulePredicatesType setIsApprovalRequest($isApprovalRequest)
 * @method RulePredicatesType getIsAutomaticForward()
 * @method RulePredicatesType setIsAutomaticForward($isAutomaticForward)
 * @method RulePredicatesType getIsAutomaticReply()
 * @method RulePredicatesType setIsAutomaticReply($isAutomaticReply)
 * @method RulePredicatesType getIsEncrypted()
 * @method RulePredicatesType setIsEncrypted($isEncrypted)
 * @method RulePredicatesType getIsMeetingRequest()
 * @method RulePredicatesType setIsMeetingRequest($isMeetingRequest)
 * @method RulePredicatesType getIsMeetingResponse()
 * @method RulePredicatesType setIsMeetingResponse($isMeetingResponse)
 * @method RulePredicatesType getIsNDR()
 * @method RulePredicatesType setIsNDR($isNDR)
 * @method RulePredicatesType getIsPermissionControlled()
 * @method RulePredicatesType setIsPermissionControlled($isPermissionControlled)
 * @method RulePredicatesType getIsReadReceipt()
 * @method RulePredicatesType setIsReadReceipt($isReadReceipt)
 * @method RulePredicatesType getIsSigned()
 * @method RulePredicatesType setIsSigned($isSigned)
 * @method RulePredicatesType getIsVoicemail()
 * @method RulePredicatesType setIsVoicemail($isVoicemail)
 * @method RulePredicatesType getItemClasses()
 * @method RulePredicatesType setItemClasses($itemClasses)
 * @method RulePredicatesType getMessageClassifications()
 * @method RulePredicatesType setMessageClassifications($messageClassifications)
 * @method RulePredicatesType getNotSentToMe()
 * @method RulePredicatesType setNotSentToMe($notSentToMe)
 * @method RulePredicatesType getSentCcMe()
 * @method RulePredicatesType setSentCcMe($sentCcMe)
 * @method RulePredicatesType getSentOnlyToMe()
 * @method RulePredicatesType setSentOnlyToMe($sentOnlyToMe)
 * @method RulePredicatesType getSentToAddresses()
 * @method RulePredicatesType setSentToAddresses($sentToAddresses)
 * @method RulePredicatesType getSentToMe()
 * @method RulePredicatesType setSentToMe($sentToMe)
 * @method RulePredicatesType getSentToOrCcMe()
 * @method RulePredicatesType setSentToOrCcMe($sentToOrCcMe)
 * @method RulePredicatesType getSensitivity()
 * @method RulePredicatesType setSensitivity($sensitivity)
 * @method RulePredicatesType getWithinDateRange()
 * @method RulePredicatesType setWithinDateRange($withinDateRange)
 * @method RulePredicatesType getWithinSizeRange()
 * @method RulePredicatesType setWithinSizeRange($withinSizeRange)
 */
class RulePredicatesType extends TypeTest
{

    /**
     * @property array $categories
     */
    protected $categories = null;

    /**
     * @property array $containsBodyStrings
     */
    protected $containsBodyStrings = null;

    /**
     * @property array $containsHeaderStrings
     */
    protected $containsHeaderStrings = null;

    /**
     * @property array $containsRecipientStrings
     */
    protected $containsRecipientStrings = null;

    /**
     * @property array $containsSenderStrings
     */
    protected $containsSenderStrings = null;

    /**
     * @property array $containsSubjectOrBodyStrings
     */
    protected $containsSubjectOrBodyStrings = null;

    /**
     * @property array $containsSubjectStrings
     */
    protected $containsSubjectStrings = null;

    /**
     * @property string $flaggedForAction
     */
    protected $flaggedForAction = null;

    /**
     * @property array $fromAddresses
     */
    protected $fromAddresses = null;

    /**
     * @property array $fromConnectedAccounts
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
     * @property array $itemClasses
     */
    protected $itemClasses = null;

    /**
     * @property array $messageClassifications
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
     * @property array $sentToAddresses
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

