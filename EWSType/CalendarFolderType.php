<?php
/**
 * Definition of the CalendarFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CalendarFolderType type
 */
class EWSType_CalendarFolderType extends EWSType
{
    /**
     * PermissionSet property
     *
     * @var EWSType_CalendarPermissionSetType
     */
    public $PermissionSet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'PermissionSet',
                'required' => false,
                'type' => 'CalendarPermissionSetType',
            ),
        );
    }
}
