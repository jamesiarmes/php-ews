<?php
/**
 * Definition of the SetUserOofSettingsRequest type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the SetUserOofSettingsRequest type
 */
class SetUserOofSettingsRequest extends EWSType
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
