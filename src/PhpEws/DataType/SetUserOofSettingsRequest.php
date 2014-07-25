<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SetUserOofSettingsRequest type
 */
class SetUserOofSettingsRequest extends DataType
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
