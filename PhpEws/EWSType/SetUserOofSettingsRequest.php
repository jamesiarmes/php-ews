<?php
/**
 * Definition of the SetUserOofSettingsRequest type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SetUserOofSettingsRequest type
 */
class SetUserOofSettingsRequest extends PhpEws\EWSType
{
    /**
     * Mailbox property
     *
     * @var EmailAddress
     */
    public $Mailbox;

    /**
     * UserOofSettings property
     *
     * @var UserOofSettings
     */
    public $UserOofSettings;
}
