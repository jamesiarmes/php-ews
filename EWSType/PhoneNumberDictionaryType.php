<?php
/**
 * Definition of the PhoneNumberDictionaryType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PhoneNumberDictionaryType type
 */
class EWSType_PhoneNumberDictionaryType extends EWSType
{
    /**
     * Entry property
     *
     * @var EWSType_PhoneNumberDictionaryEntryType
     */
    public $Entry;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Entry',
                'required' => false,
                'type' => 'PhoneNumberDictionaryEntryType',
            ),
        );
    }
}
