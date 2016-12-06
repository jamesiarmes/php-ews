<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\SearchMailboxesResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response message for a SearchMailboxes request.
 *
 * @package php-ews\Response
 */
class SearchMailboxesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the result of the request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\SearchMailboxesResultType
     */
    public $SearchMailboxesResult;
}
