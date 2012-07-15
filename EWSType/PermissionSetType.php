<?php
/**
 * Definition of the PermissionSetType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PermissionSetType type
 */
class EWSType_PermissionSetType extends EWSType
{
    /**
     * Permissions property
     *
     * @var EWSType_ArrayOfPermissionsType
     */
    public $Permissions;

    /**
     * UnknownEntries property
     *
     * @var EWSType_ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Permissions',
                'required' => false,
                'type' => 'ArrayOfPermissionsType',
            ),
            array(
                'name' => 'UnknownEntries',
                'required' => false,
                'type' => 'ArrayOfUnknownEntriesType',
            ),
        );
    }
}
