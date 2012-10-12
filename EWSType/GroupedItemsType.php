<?php
/**
 * Definition of the GroupedItemsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GroupedItemsType type
 */
class EWSType_GroupedItemsType extends EWSType
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
