<?php
/**
 * Definition of the ItemInfoResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ItemInfoResponseMessageType type
 */
class ItemInfoResponseMessageType extends PhpEws\EWSType
{
    /**
     * Items property
     *
     * @var ArrayOfRealItemsType
     */
    public $Items;
}
