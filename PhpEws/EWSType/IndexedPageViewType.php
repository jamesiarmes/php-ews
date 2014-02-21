<?php
/**
 * Definition of the IndexedPageViewType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the IndexedPageViewType type
 */
class IndexedPageViewType extends PhpEws\EWSType
{
    /**
     * Offset property
     *
     * @var integer
     */
    public $Offset;

    /**
     * BasePoint property
     *
     * @var IndexBasePointType
     */
    public $BasePoint;
}
