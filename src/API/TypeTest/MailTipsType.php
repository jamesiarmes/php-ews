<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing MailTipsType
 *
 *
 * XSD Type: MailTips
 *
 * @method MailTipsType getRecipientAddress()
 * @method MailTipsType setRecipientAddress($recipientAddress)
 * @method MailTipsType getPendingMailTips()
 * @method MailTipsType setPendingMailTips($pendingMailTips)
 * @method MailTipsType getOutOfOffice()
 * @method MailTipsType setOutOfOffice($outOfOffice)
 * @method MailTipsType getMailboxFull()
 * @method MailTipsType setMailboxFull($mailboxFull)
 * @method MailTipsType getCustomMailTip()
 * @method MailTipsType setCustomMailTip($customMailTip)
 * @method MailTipsType getTotalMemberCount()
 * @method MailTipsType setTotalMemberCount($totalMemberCount)
 * @method MailTipsType getExternalMemberCount()
 * @method MailTipsType setExternalMemberCount($externalMemberCount)
 * @method MailTipsType getMaxMessageSize()
 * @method MailTipsType setMaxMessageSize($maxMessageSize)
 * @method MailTipsType getDeliveryRestricted()
 * @method MailTipsType setDeliveryRestricted($deliveryRestricted)
 * @method MailTipsType getIsModerated()
 * @method MailTipsType setIsModerated($isModerated)
 * @method MailTipsType getInvalidRecipient()
 * @method MailTipsType setInvalidRecipient($invalidRecipient)
 */
class MailTipsType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $recipientAddress
     */
    protected $recipientAddress = null;

    /**
     * @property array $pendingMailTips
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

