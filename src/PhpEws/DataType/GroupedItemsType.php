<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

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
     * @var ArrayOfRealItemsType
     */
    public $Items;
}
