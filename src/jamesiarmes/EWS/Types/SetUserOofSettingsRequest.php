<?php
/**
 * Contains SetUserOofSettingsRequest.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the arguments used to set a mailbox user's Out of Office (OOF)
 * settings.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class SetUserOofSettingsRequest extends EWSType
{
    /**
     * Identifies the mailbox user for a SetUserOofSettings or
     * GetUserOofSettings request.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Specifies the OOF settings.
     *
     * @since Exchange 2007
     *
     * @var UserOofSettings
     */
    public $UserOofSettings;
}
