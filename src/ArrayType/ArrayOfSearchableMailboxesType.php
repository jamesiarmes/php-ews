<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfSearchableMailboxesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of mailboxes that can be searched.
 *
 * @package php-ews\Array
 */
class ArrayOfSearchableMailboxesType extends ArrayType
{
    /**
     * Specifies a mailbox.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\SearchableMailboxType[]
     */
    public $SearchableMailbox = array();
}
