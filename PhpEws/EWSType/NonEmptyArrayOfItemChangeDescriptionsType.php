<?php
/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends PhpEws\EWSType
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
