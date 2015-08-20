<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing IndexedPageViewType
 *
 *
 * XSD Type: IndexedPageViewType
 *
 * @method IndexedPageViewType getOffset()
 * @method IndexedPageViewType setOffset(integer $offset)
 * @method IndexedPageViewType getBasePoint()
 * @method IndexedPageViewType setBasePoint(string $basePoint)
 */
class IndexedPageViewType extends BasePagingType
{

    /**
     * @property integer $offset
     */
    protected $offset = null;

    /**
     * @property string $basePoint
     */
    protected $basePoint = null;


}

