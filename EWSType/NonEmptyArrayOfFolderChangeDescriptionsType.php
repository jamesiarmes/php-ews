<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 */
class EWSType_NonEmptyArrayOfFolderChangeDescriptionsType extends EWSType
{
    /**
     * AppendToFolderField property
     *
     * @var EWSType_AppendToFolderFieldType
     */
    public $AppendToFolderField;

    /**
     * SetFolderField property
     *
     * @var EWSType_SetFolderFieldType
     */
    public $SetFolderField;

    /**
     * DeleteFolderField property
     *
     * @var EWSType_DeleteFolderFieldType
     */
    public $DeleteFolderField;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'AppendToFolderField',
                'required' => false,
                'type' => 'AppendToFolderFieldType',
            ),
            array(
                'name' => 'SetFolderField',
                'required' => false,
                'type' => 'SetFolderFieldType',
            ),
            array(
                'name' => 'DeleteFolderField',
                'required' => false,
                'type' => 'DeleteFolderFieldType',
            ),
        );
    }
}
