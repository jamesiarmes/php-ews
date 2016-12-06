<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SingleRecipientType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Identifies the delegate in a delegate access scenario.
 *
 * @package php-ews\Type
 */
class SingleRecipientType extends Type
{
    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
