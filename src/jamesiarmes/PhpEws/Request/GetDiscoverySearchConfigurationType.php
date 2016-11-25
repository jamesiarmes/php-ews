<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetDiscoverySearchConfigurationType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to retrieve the eDiscovery search configuration.
 *
 * @package php-ews\Request
 */
class GetDiscoverySearchConfigurationType extends BaseRequestType
{
    /**
     * Contains a Boolean value that indicates whether to expand the membership
     * of the group returned from a GetSearchableMailboxes request.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $ExpandGroupMembership;

    /**
     * Specifies whether to include the in-place hold configuration.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $InPlaceHoldConfigurationOnly;

    /**
     * Specifies the identifier of the search.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $SearchId;
}
