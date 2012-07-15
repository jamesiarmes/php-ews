<?php
/**
 * Definition of the ArrayOfPermissionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfPermissionsType type
 */
class EWSType_ArrayOfPermissionsType extends EWSType
{
    /**
     * Permission property
     *
     * @var EWSType_PermissionType
     */
    public $Permission;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Permission',
                'required' => false,
                'type' => 'PermissionType',
            ),
        );
    }
}
