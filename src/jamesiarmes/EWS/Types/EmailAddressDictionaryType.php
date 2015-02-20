<?php
/**
 * Contains EmailAddressDictionaryType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of e-mail addresses for a contact.
 *
 * @package jamesiarmes\EWS\Types
 */
class EmailAddressDictionaryType extends EWSType
{
    /**
     * Represents a single e-mail address for a contact.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressDictionaryEntryType
     */
    public $Entry;
}
