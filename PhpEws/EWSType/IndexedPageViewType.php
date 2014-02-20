<?php
/**
 * Definition of the IndexedPageViewType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the IndexedPageViewType type
 */
class EWSType_IndexedPageViewType extends EWSType
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
