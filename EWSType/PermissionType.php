<?php
/**
 * Definition of the PermissionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PermissionType type
 */
class EWSType_PermissionType extends EWSType
{
    /**
     * ReadItems property
     *
     * @var EWSType_PermissionReadAccessType
     */
    public $ReadItems;

    /**
     * PermissionLevel property
     *
     * @var EWSType_PermissionLevelType
     */
    public $PermissionLevel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ReadItems',
                'required' => false,
                'type' => 'PermissionReadAccessType',
            ),
            array(
                'name' => 'PermissionLevel',
                'required' => false,
                'type' => 'PermissionLevelType',
            ),
        );
    }
}
