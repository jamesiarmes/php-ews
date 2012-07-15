<?php
/**
 * Definition of the PhysicalAddressDictionaryType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PhysicalAddressDictionaryType type
 */
class EWSType_PhysicalAddressDictionaryType extends EWSType
{
    /**
     * Entry property
     *
     * @var EWSType_PhysicalAddressDictionaryEntryType
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
                'type' => 'PhysicalAddressDictionaryEntryType',
            ),
        );
    }
}
