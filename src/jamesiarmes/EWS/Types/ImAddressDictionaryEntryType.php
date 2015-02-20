<?php
/**
 * Contains ImAddressDictionaryEntryType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an instant messaging (IM) address for a contact.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Create a common EntryType class.
 * @todo Create a common TextEntryType class.
 */
class ImAddressDictionaryEntryType extends EWSType
{
    /**
     * Represents the IM address.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Identifies the IM address.
     *
     * @since Exchange 2007
     *
     * @var ImAddressKeyType
     */
    public $Key;
}
