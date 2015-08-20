<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing MailTipsServiceConfigurationType
 *
 *
 * XSD Type: MailTipsServiceConfiguration
 *
 * @method MailTipsServiceConfigurationType getMailTipsEnabled()
 * @method MailTipsServiceConfigurationType setMailTipsEnabled(boolean $mailTipsEnabled)
 * @method MailTipsServiceConfigurationType getMaxRecipientsPerGetMailTipsRequest()
 * @method MailTipsServiceConfigurationType setMaxRecipientsPerGetMailTipsRequest(integer $maxRecipientsPerGetMailTipsRequest)
 * @method MailTipsServiceConfigurationType getMaxMessageSize()
 * @method MailTipsServiceConfigurationType setMaxMessageSize(integer $maxMessageSize)
 * @method MailTipsServiceConfigurationType getLargeAudienceThreshold()
 * @method MailTipsServiceConfigurationType setLargeAudienceThreshold(integer $largeAudienceThreshold)
 * @method MailTipsServiceConfigurationType getShowExternalRecipientCount()
 * @method MailTipsServiceConfigurationType setShowExternalRecipientCount(boolean $showExternalRecipientCount)
 * @method MailTipsServiceConfigurationType getInternalDomains()
 * @method MailTipsServiceConfigurationType setInternalDomains(array $internalDomains)
 */
class MailTipsServiceConfigurationType extends ServiceConfigurationType
{

    /**
     * @property boolean $mailTipsEnabled
     */
    protected $mailTipsEnabled = null;

    /**
     * @property integer $maxRecipientsPerGetMailTipsRequest
     */
    protected $maxRecipientsPerGetMailTipsRequest = null;

    /**
     * @property integer $maxMessageSize
     */
    protected $maxMessageSize = null;

    /**
     * @property integer $largeAudienceThreshold
     */
    protected $largeAudienceThreshold = null;

    /**
     * @property boolean $showExternalRecipientCount
     */
    protected $showExternalRecipientCount = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SmtpDomainType[] $internalDomains
     */
    protected $internalDomains = null;


}

