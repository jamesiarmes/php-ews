<?php
/**
 * Definition of the GetItemType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GetItemType type
 */
class GetItemType extends PhpEws\EWSType
{
    /**
     * ItemShape property
     *
     * @var ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
