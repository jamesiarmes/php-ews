<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the GroupedItemsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GroupedItemsType type
 */
class GroupedItemsType extends DataType
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
