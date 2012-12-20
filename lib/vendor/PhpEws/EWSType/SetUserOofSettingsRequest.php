<?php
/**
 * Definition of the SetUserOofSettingsRequest type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SetUserOofSettingsRequest type
 */
class EWSType_SetUserOofSettingsRequest extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddress
     */
    public $Mailbox;

    /**
     * UserOofSettings property
     *
     * @var EWSType_UserOofSettings
     */
    public $UserOofSettings;
}
