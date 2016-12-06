<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfMailboxSearchScopesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a list of one or more mailboxes and associated search scopes for a
 * discovery search.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfMailboxSearchScopesType extends ArrayType
{
    /**
     * Specifies a mailbox and a search scope for a discovery search.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\MailboxSearchScopeType[]
     */
    public $MailboxSearchScope = array();
}
