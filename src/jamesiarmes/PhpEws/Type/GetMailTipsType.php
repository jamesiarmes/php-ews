<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetMailTipsType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the recipients and types of mail tips to retrieve.
 *
 * @package php-ews\Types
 */
class GetMailTipsType extends BaseRequestType
{
    /**
     * Contains the types of mail tips requested from the service.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Enumeration\MailTipTypes
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
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $SendingAs;
}
