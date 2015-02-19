<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\CompleteNameType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the complete name of a contact.
 *
 * @package php-ews\Type
 */
class CompleteNameType extends Type
{
    /**
     * Represents the first name of contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $FirstName;

    /**
     * Represents the full name of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $FullName;

    /**
     * Represents the initials of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Initials;

    /**
     * Represents the last name of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $LastName;

    /**
     * Represents the middle name of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $MiddleName;

    /**
     * Represents the nickname of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Nickname;

    /**
     * Represents a suffix to a contact's name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Suffix;

    /**
     * Represents the title of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Title;

    /**
     * Represents the name used in Japan for the searchable or phonetic spelling
     * of a Japanese first name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $YomiFirstName;

    /**
     * Represents the name used in Japan for the searchable or phonetic spelling
     * of a Japanese last name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $YomiLastName;
}
