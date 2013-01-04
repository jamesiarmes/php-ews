<?php
/**
 * Definition of the ItemInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ItemInfoResponseMessageType type
 */
class ItemInfoResponseMessageType extends EWSType
{
    /**
     * Items property
     *
     * @var EWSType_ArrayOfRealItemsType
     */
    public $Items;
}
