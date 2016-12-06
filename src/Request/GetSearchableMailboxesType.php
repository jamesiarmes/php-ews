<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetSearchableMailboxesType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to get a list of mailboxes that the client has permission
 * to perform an eDiscovery search on.
 *
 * @package php-ews\Request
 */
class GetSearchableMailboxesType extends BaseRequestType
{
    /**
     * Indicates whether to expand the membership of the group.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $ExpandGroupMembership;

    /**
     * Contains the query string to filter the mailboxes to be returned.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $SearchFilter;
}
