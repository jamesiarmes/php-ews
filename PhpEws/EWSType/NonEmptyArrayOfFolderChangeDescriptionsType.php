<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends EWSType
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
}
