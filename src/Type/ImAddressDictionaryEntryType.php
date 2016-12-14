<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ImAddressDictionaryEntryType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents an instant messaging (IM) address for a contact.
 *
 * @package php-ews\Type
 *
 * @todo Create a common EntryType class.
 * @todo Create a common TextEntryType class.
 */
class ImAddressDictionaryEntryType extends Type
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
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ImAddressKeyType
     */
    public $Key;
}
