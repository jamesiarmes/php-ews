<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetUserOofSettingsRequest.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines the arguments used to get a mailbox user's Out of Office (OOF)
 * settings.
 *
 * @package php-ews\Request
 */
class GetUserOofSettingsRequest extends BaseRequestType
{
    /**
     * Identifies the mailbox user for the request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
