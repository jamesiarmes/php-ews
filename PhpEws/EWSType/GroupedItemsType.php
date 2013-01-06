<?php
/**
 * Definition of the GroupedItemsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GroupedItemsType type
 */
class GroupedItemsType extends EWSType
{
    /**
     * GroupIndex property
     *
     * @var string
     */
    public $GroupIndex;

    /**
     * Items property
     *
     * @var EWSType_ArrayOfRealItemsType
     */
    public $Items;
}
