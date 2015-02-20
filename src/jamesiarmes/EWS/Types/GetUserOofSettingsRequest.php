<?php
/**
 * Contains GetUserOofSettingsRequest.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the arguments used to get a mailbox user's Out of Office (OOF)
 * settings.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class GetUserOofSettingsRequest extends EWSType
{
    /**
     * Identifies the mailbox user for the request.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
