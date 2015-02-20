<?php
/**
 * Contains ImAddressDictionaryType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of instant messaging addresses for a contact.
 *
 * @package jamesiarmes\EWS\Types
 */
class ImAddressDictionaryType extends EWSType
{
    /**
     * Represents an instant messaging address for a contact.
     *
     * @since Exchange 2007
     *
     * @var ImAddressDictionaryEntryType
     */
    public $Entry;
}
