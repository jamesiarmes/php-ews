<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\MailboxHoldResultType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines the result of the mailbox hold request request.
 *
 * @package php-ews\Type
 */
class MailboxHoldResultType extends Type
{
    /**
     * Contains the mailbox hold identifier.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $HoldId;

    /**
     * Specifies a list of one or more mailbox hold statuses.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfMailboxHoldStatusType
     */
    public $MailboxHoldStatuses;

    /**
     * Contains the search query for the hold.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Query;
}
