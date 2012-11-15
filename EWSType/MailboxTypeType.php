<?php
/**
 * Contains EWSType_MailboxTypeType.
 */

/**
 * Represents the type of mailbox that is represented by an e-mail address.
 *
 * @package php-ews\Enumerations
 */
class EWSType_MailboxTypeType extends EWSType
{
    /**
     * Represents a contact in a user's mailbox.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACT = 'Contact';

    /**
     * Represents a mail-enabled Active Directory object.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MAILBOX = 'Mailbox';

    /**
     * Represents a one-off member of a personal distribution list.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ONE_OFF = 'OneOff';

    /**
     * Represents a private distribution list in a user's mailbox.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PRIVATE_DISTRIBUTION_LIST = 'PrivateDL';

    /**
     * Represents a public distribution list.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PUBLIC_DISTRIBUTION_LIST = 'PublicDL';

    /**
     * Represents a public folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const PUBLIC_FOLDER = 'PublicFolder';

    /**
     * Represents an unknown type of mailbox.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const UNKNOWN = 'Unknown';

    /**
     * Indicates the type of the mailbox.
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
