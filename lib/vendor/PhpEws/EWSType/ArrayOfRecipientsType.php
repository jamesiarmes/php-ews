<?php
/**
 * Definition of the ArrayOfRecipientsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the ArrayOfRecipientsType type
 */
class ArrayOfRecipientsType extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;
}
