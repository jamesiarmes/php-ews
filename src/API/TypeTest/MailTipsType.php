<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing MailTipsType
 *
 *
 * XSD Type: MailTips
 *
 * @method MailTipsType getRecipientAddress()
 * @method MailTipsType setRecipientAddress(EmailAddressType $recipientAddress)
 * @method MailTipsType getPendingMailTips()
 * @method MailTipsType setPendingMailTips(array $pendingMailTips)
 * @method MailTipsType getOutOfOffice()
 * @method MailTipsType setOutOfOffice(OutOfOfficeMailTipType $outOfOffice)
 * @method MailTipsType getMailboxFull()
 * @method MailTipsType setMailboxFull(boolean $mailboxFull)
 * @method MailTipsType getCustomMailTip()
 * @method MailTipsType setCustomMailTip(string $customMailTip)
 * @method MailTipsType getTotalMemberCount()
 * @method MailTipsType setTotalMemberCount(integer $totalMemberCount)
 * @method MailTipsType getExternalMemberCount()
 * @method MailTipsType setExternalMemberCount(integer $externalMemberCount)
 * @method MailTipsType getMaxMessageSize()
 * @method MailTipsType setMaxMessageSize(integer $maxMessageSize)
 * @method MailTipsType getDeliveryRestricted()
 * @method MailTipsType setDeliveryRestricted(boolean $deliveryRestricted)
 * @method MailTipsType getIsModerated()
 * @method MailTipsType setIsModerated(boolean $isModerated)
 * @method MailTipsType getInvalidRecipient()
 * @method MailTipsType setInvalidRecipient(boolean $invalidRecipient)
 */
class MailTipsType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $recipientAddress
     */
    protected $recipientAddress = null;

    /**
     * @property string[] $pendingMailTips
     */
    protected $pendingMailTips = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\OutOfOfficeMailTipType $outOfOffice
     */
    protected $outOfOffice = null;

    /**
     * @property boolean $mailboxFull
     */
    protected $mailboxFull = null;

    /**
     * @property string $customMailTip
     */
    protected $customMailTip = null;

    /**
     * @property integer $totalMemberCount
     */
    protected $totalMemberCount = null;

    /**
     * @property integer $externalMemberCount
     */
    protected $externalMemberCount = null;

    /**
     * @property integer $maxMessageSize
     */
    protected $maxMessageSize = null;

    /**
     * @property boolean $deliveryRestricted
     */
    protected $deliveryRestricted = null;

    /**
     * @property boolean $isModerated
     */
    protected $isModerated = null;

    /**
     * @property boolean $invalidRecipient
     */
    protected $invalidRecipient = null;


}

