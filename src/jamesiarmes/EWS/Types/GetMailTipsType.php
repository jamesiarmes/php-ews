<?php
/**
 * Contains GetMailTipsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the recipients and types of mail tips to retrieve.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class GetMailTipsType extends EWSType
{
    /**
     * Contains the types of mail tips requested from the service.
     *
     * @since Exchange 2010
     *
     * @var MailTipTypes
     */
    public $MailTipsRequested;

    /**
     * Contains a list of recipients to check for mail tips.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfRecipientsType
     */
    public $Recipients;

    /**
     * Contains an e-mail address that a user is trying to send as.
     *
     * @since Exchange 2010
     *
     * @var EmailAddressType
     */
    public $SendingAs;
}
