<?php
/**
 * Definition of the FindItemResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FindItemResponseMessageType type
 */
class EWSType_FindItemResponseMessageType extends EWSType
{
    /**
     * RootFolder property
     *
     * @var EWSType_FindItemParentType
     */
    public $RootFolder;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'RootFolder',
                'required' => false,
                'type' => 'FindItemParentType',
            ),
        );
    }
}
