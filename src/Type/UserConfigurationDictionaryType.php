<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UserConfigurationDictionaryType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines a set of dictionary property entries for a user configuration object.
 *
 * @package php-ews\Type
 */
class UserConfigurationDictionaryType extends Type
{
    /**
     * Specifies the contents of a single dictionary entry property.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\UserConfigurationDictionaryEntryType[]
     */
    public $DictionaryEntry = array();
}
