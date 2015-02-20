<?php
/**
 * Contains ResolutionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a single resolved entity.
 *
 * @package jamesiarmes\EWS\Types
 */
class ResolutionType extends EWSType
{
    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var ContactItemType
     */
    public $Contact;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
