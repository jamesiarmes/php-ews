<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetUserOofSettingsRequest.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines the arguments used to get a mailbox user's Out of Office (OOF)
 * settings.
 *
 * @package php-ews\Types
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
