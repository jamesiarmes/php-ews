<?php
/**
 * Definition of the GetUserOofSettingsRequest type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the GetUserOofSettingsRequest type
 */
class GetUserOofSettingsRequest extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddress
     */
    public $Mailbox;
}
