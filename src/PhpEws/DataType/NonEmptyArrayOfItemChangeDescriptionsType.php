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
     * @var AppendToItemFieldType
     */
    public $AppendToItemField;

    /**
     * SetItemField property
     *
     * @var SetItemFieldType
     */
    public $SetItemField;

    /**
     * DeleteItemField property
     *
     * @var DeleteItemFieldType
     */
    public $DeleteItemField;
}
