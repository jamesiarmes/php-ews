<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\MailboxSearchLocationType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines whether a search or fetch for a conversation should span either the
 * primary mailbox, archive mailbox, or both the primary and archive mailbox.
 *
 * @package php-ews\Enumeration
 */
class MailboxSearchLocationType extends Enumeration
{
    /**
     * Indicates a scope that targets both the primary mailbox and archive
     * mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ALL = 'All';

    /**
     * Indicates a scope that targets the archive mailbox for a user.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ARCHIVE = 'ArchiveOnly';

    /**
     * Indicates a scope that targets the primary mailbox for a user.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PRIMARY = 'PrimaryOnly';
}
