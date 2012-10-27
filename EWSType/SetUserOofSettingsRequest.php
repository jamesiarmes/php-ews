<?php
/**
 * Contains EWSType_SetUserOofSettingsRequest.
 */

/**
 * Defines the arguments used to set a mailbox user's Out of Office (OOF)
 * settings.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_SetUserOofSettingsRequest extends EWSType
{
    /**
     * Identifies the mailbox user for a SetUserOofSettings or
     * GetUserOofSettings request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * Specifies the OOF settings.
     *
     * @since Exchange 2007
     *
     * @var EWSType_UserOofSettings
     */
    public $UserOofSettings;
}
