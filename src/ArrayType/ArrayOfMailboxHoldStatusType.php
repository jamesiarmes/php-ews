<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfMailboxHoldStatusType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a list of one or more mailbox hold statuses.
 *
 * @package php-ews\Array
 */
class ArrayOfMailboxHoldStatusType extends ArrayType
{
    /**
     * Specifies the hold status of the mailbox.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\MailboxHoldStatusType[]
     */
    public $MailboxHoldStatus = array();
}
