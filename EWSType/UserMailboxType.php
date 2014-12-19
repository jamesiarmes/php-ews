<?php
/**
 * Contains EWSType_UserMailboxType.
 */

/**
 * Represents a user mailbox.
 *
 * @package php-ews\Types
 */
class EWSType_UserMailboxType extends EWSType
{
    /**
     * The text value of the Id attribute is the identifier of the mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Id;

    /**
     * Whether the mailbox is an archive mailbox.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $IsArchive;
}
