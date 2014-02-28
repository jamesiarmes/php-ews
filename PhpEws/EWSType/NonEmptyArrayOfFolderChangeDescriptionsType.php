<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends PhpEws\EWSType
{
    /**
     * AppendToFolderField property
     *
     * @var AppendToFolderFieldType
     */
    public $AppendToFolderField;

    /**
     * SetFolderField property
     *
     * @var SetFolderFieldType
     */
    public $SetFolderField;

    /**
     * DeleteFolderField property
     *
     * @var DeleteFolderFieldType
     */
    public $DeleteFolderField;
}
