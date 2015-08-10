<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing MailTipsServiceConfigurationType
 *
 *
 * XSD Type: MailTipsServiceConfiguration
 *
 * @method MailTipsServiceConfigurationType getMailTipsEnabled()
 * @method MailTipsServiceConfigurationType setMailTipsEnabled($mailTipsEnabled)
 * @method MailTipsServiceConfigurationType getMaxRecipientsPerGetMailTipsRequest()
 * @method MailTipsServiceConfigurationType
 * setMaxRecipientsPerGetMailTipsRequest($maxRecipientsPerGetMailTipsRequest)
 * @method MailTipsServiceConfigurationType getMaxMessageSize()
 * @method MailTipsServiceConfigurationType setMaxMessageSize($maxMessageSize)
 * @method MailTipsServiceConfigurationType getLargeAudienceThreshold()
 * @method MailTipsServiceConfigurationType
 * setLargeAudienceThreshold($largeAudienceThreshold)
 * @method MailTipsServiceConfigurationType getShowExternalRecipientCount()
 * @method MailTipsServiceConfigurationType
 * setShowExternalRecipientCount($showExternalRecipientCount)
 * @method MailTipsServiceConfigurationType getInternalDomains()
 * @method MailTipsServiceConfigurationType setInternalDomains($internalDomains)
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
     * @property array $internalDomains
     */
    protected $internalDomains = null;


}

