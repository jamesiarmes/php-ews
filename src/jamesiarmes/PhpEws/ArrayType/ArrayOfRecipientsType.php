<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRecipientsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of recipients of an item.
 *
 * @package php-ews\Array
 */
class ArrayOfRecipientsType extends ArrayType
{
    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType[]
     */
    public $Mailbox = array();
}
