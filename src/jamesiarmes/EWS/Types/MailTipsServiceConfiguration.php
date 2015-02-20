<?php
/**
 * Contains MailTipsServiceConfiguration.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents service configuration information for the mail tips service.
 *
 * @package jamesiarmes\EWS\Types
 */
class MailTipsServiceConfiguration extends EWSType
{
    /**
     * Identifies the list of internal SMTP domains of the organization.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var SmtpDomainList
     */
    public $InternalDomains;

    /**
     * Represents the large audience threshold for a client.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $LargeAudienceThreshold;

    /**
     * Indicates whether the mail tips service is available.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $MailTipsEnabled;

    /**
     * Represents the maximum message size a recipient can accept.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $MaxMessageSize;

    /**
     * Indicates the maximum number of recipients that can be passed to the
     * GetMailTips operation.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $MaxRecipientsPerGetMailTipsRequest;

    /**
     * Indicates whether consumers of the GetMailTips operation have to show
     * mail tips that indicate the number of external recipients to which a
     * message is addressed.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $ShowExternalRecipientCount;
}
