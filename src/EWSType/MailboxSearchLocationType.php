<?php
/**
 * Contains EWSType_MailboxSearchLocationType.
 */

/**
 * Defines whether a search or fetch for a conversation should span either the
 * primary mailbox, archive mailbox, or both the primary and archive mailbox.
 *
 * @package php-ews\Enumerations
 */
class EWSType_MailboxSearchLocationType extends EWSType
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

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
