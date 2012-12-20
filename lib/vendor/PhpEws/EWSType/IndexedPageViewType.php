<?php
/**
 * Definition of the IndexedPageViewType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the IndexedPageViewType type
 */
class IndexedPageViewType extends EWSType
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
     * @var EWSType_IndexBasePointType
     */
    public $BasePoint;
}
