<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfMailboxQueriesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a list of mailboxes and associated queries for discovery search.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfMailboxQueriesType extends ArrayType
{
    /**
     * Specifies a query and the scope of a discovery search.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\MailboxQueryType[]
     */
    public $MailboxQuery = array();
}
