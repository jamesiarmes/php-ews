<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends DataType
{
    /**
     * AppendToItemField property
     *
     * @var EWSType_AppendToItemFieldType
     */
    public $AppendToItemField;

    /**
     * SetItemField property
     *
     * @var EWSType_SetItemFieldType
     */
    public $SetItemField;

    /**
     * DeleteItemField property
     *
     * @var EWSType_DeleteItemFieldType
     */
    public $DeleteItemField;
}
