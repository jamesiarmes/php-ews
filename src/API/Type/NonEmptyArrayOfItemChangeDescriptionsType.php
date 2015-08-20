<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfItemChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfItemChangeDescriptionsType
 *
 * @method NonEmptyArrayOfItemChangeDescriptionsType getAppendToItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setAppendToItemField(array $appendToItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType getSetItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setSetItemField(array $setItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType getDeleteItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setDeleteItemField(array $deleteItemField)
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\AppendToItemFieldType[] $appendToItemField
     */
    protected $appendToItemField = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SetItemFieldType[] $setItemField
     */
    protected $setItemField = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DeleteItemFieldType[] $deleteItemField
     */
    protected $deleteItemField = null;
}
