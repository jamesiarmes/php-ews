<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the SetUserOofSettingsRequest type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SetUserOofSettingsRequest type
 */
class SetUserOofSettingsRequest extends DataType
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
