<?php
/**
 * Contains EWSType_GetMailTipsType.
 */

/**
 * Represents the recipients and types of mail tips to retrieve.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetMailTipsType extends EWSType
{
    /**
     * Contains the types of mail tips requested from the service.
     *
     * @since Exchange 2010
     *
     * @var EWSType_MailTipTypes
     */
    public $MailTipsRequested;

    /**
     * Contains a list of recipients to check for mail tips.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $Recipients;

    /**
     * Contains an e-mail address that a user is trying to send as.
     *
     * @since Exchange 2010
     *
     * @var EWSType_EmailAddressType
     */
    public $SendingAs;
}
