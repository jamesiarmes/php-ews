<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfFailedSearchMailboxesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of mailboxes that failed on search.
 *
 * @package php-ews\Array
 */
class ArrayOfFailedSearchMailboxesType extends ArrayType
{
    /**
     * Specifies the error message for a mailbox that failed on search.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\FailedSearchMailboxType[]
     */
    public $FailedMailbox = array();
}
