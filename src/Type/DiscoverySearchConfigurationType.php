<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\DiscoverySearchConfigurationType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines a configuration for eDiscovery search.
 *
 * @package php-ews\Type
 */
class DiscoverySearchConfigurationType extends Type
{
    /**
     * Specifies the identity of a hold that preserves the mailbox items.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $InPlaceHoldIdentity;

    /**
     * Identifies the culture to be used for the culture-specific format of date
     * ranges.
     *
     * It also specifies the language used in a search query.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Language;

    /**
     * Specifies the managing organization.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $ManagedByOrganization;

    /**
     * Specifies the identifier of the search.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $SearchId;

    /**
     * Specifies the name of an eDiscovery search query.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $SearchQuery;

    /**
     * Contains a list of mailboxes.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfSearchableMailboxesType
     */
    public $SearchableMailboxes;
}
