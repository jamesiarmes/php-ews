<?php
/**
 * Contains EWSType_ImAddressDictionaryEntryType.
 */

/**
 * Represents an instant messaging (IM) address for a contact.
 *
 * @package php-ews\Types
 */
class EWSType_ImAddressDictionaryEntryType extends EWSType
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
     * @var EWSType_ImAddressKeyType
     */
    public $Key;
}
