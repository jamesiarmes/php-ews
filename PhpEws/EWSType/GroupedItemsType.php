<?php
/**
 * Definition of the GroupedItemsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GroupedItemsType type
 */
class GroupedItemsType extends PhpEws\EWSType
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
