<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetNonIndexableItemStatisticsType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to retrieve non-indexable item statistics.
 *
 * @package php-ews\Request
 */
class GetNonIndexableItemStatisticsType extends BaseRequestType
{
    /**
     * Specifies an array of Mailbox elements.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayofLegacyDNsType
     */
    public $Mailboxes;

    /**
     * Whether or not to search archive folders only.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $SearchArchiveOnly;
}
