<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetHoldOnMailboxesResponse.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response to get the hold status for a mailbox.
 *
 * @package php-ews\Response
 */
class GetHoldOnMailboxesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the result of the GetHoldOnMailboxes request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\MailboxHoldResultType
     */
    public $MailboxHoldResult;
}
