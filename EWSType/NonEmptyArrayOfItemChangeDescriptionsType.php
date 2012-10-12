<?php
/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 */
class EWSType_NonEmptyArrayOfItemChangeDescriptionsType extends EWSType
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
