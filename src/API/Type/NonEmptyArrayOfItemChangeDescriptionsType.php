<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfItemChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfItemChangeDescriptionsType
 *
 * @method NonEmptyArrayOfItemChangeDescriptionsType addAppendToItemField(AppendToItemFieldType $appendToItemField)
 * @method AppendToItemFieldType[] getAppendToItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setAppendToItemField(array $appendToItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType addSetItemField(SetItemFieldType $setItemField)
 * @method SetItemFieldType[] getSetItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setSetItemField(array $setItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType addDeleteItemField(DeleteItemFieldType $deleteItemField)
 * @method DeleteItemFieldType[] getDeleteItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setDeleteItemField(array $deleteItemField)
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\AppendToItemFieldType[]
     */
    protected $appendToItemField = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SetItemFieldType[]
     */
    protected $setItemField = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DeleteItemFieldType[]
     */
    protected $deleteItemField = null;
}
