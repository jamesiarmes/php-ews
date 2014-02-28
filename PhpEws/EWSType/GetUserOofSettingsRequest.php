<?php
/**
 * Definition of the GetUserOofSettingsRequest type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GetUserOofSettingsRequest type
 */
class GetUserOofSettingsRequest extends PhpEws\EWSType
{
    /**
     * Mailbox property
     *
     * @var EmailAddress
     */
    public $Mailbox;
}
