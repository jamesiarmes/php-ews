<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the ItemInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ItemInfoResponseMessageType type
 */
class ItemInfoResponseMessageType extends DataType
{
    /**
     * Items property
     *
     * @var EWSType_ArrayOfRealItemsType
     */
    public $Items;
}
