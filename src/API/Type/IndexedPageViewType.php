<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing IndexedPageViewType
 *
 *
 * XSD Type: IndexedPageViewType
 *
 * @method integer getOffset()
 * @method IndexedPageViewType setOffset(integer $offset)
 * @method string getBasePoint()
 * @method IndexedPageViewType setBasePoint(string $basePoint)
 */
class IndexedPageViewType extends BasePagingType
{

    /**
     * @var integer
     */
    protected $offset = null;

    /**
     * @var string
     */
    protected $basePoint = null;
}
