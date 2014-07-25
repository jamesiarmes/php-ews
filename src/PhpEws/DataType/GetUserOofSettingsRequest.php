<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the GetUserOofSettingsRequest type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetUserOofSettingsRequest type
 */
class GetUserOofSettingsRequest extends DataType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddress
     */
    public $Mailbox;
}
