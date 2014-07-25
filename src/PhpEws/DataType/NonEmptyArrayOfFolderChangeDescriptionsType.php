<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends DataType
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
