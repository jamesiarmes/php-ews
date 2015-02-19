<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ResolutionType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a single resolved entity.
 *
 * @package php-ews\Type
 */
class ResolutionType extends Type
{
    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ContactItemType
     */
    public $Contact;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
