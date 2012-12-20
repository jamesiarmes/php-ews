<?php
/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 */
class NonEmptyArrayOfItemChangesType extends EWSType
{
    /**
     * ItemChange property
     *
     * @var EWSType_ItemChangeType
     */
    public $ItemChange;
}
