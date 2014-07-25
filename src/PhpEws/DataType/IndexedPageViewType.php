<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the IndexedPageViewType type
 */
class IndexedPageViewType extends DataType
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
