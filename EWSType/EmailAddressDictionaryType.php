<?php
/**
 * Definition of the EmailAddressDictionaryType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the EmailAddressDictionaryType type
 */
class EWSType_EmailAddressDictionaryType extends EWSType
{
    /**
     * Entry property
     *
     * @var EWSType_EmailAddressDictionaryEntryType
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
                'type' => 'EmailAddressDictionaryEntryType',
            ),
        );
    }
}
