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
     * @var IndexBasePointType
     */
    public $BasePoint;
}
