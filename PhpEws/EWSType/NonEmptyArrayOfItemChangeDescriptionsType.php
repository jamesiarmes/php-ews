<?php
/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends EWSType
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
