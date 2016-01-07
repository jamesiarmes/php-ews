<?php
/**
 * Contains EWSType_EmailAddressDictionaryType.
 */

/**
 * Represents a collection of e-mail addresses for a contact.
 *
 * @package php-ews\Types
 */
class EWSType_EmailAddressDictionaryType extends EWSType
{
    /**
     * Represents a single e-mail address for a contact.
     *
     * @since Exchange 2007
     *
     * @var EWSType_EmailAddressDictionaryEntryType
     */
    public $Entry;
}
