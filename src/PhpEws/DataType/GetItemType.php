<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the GetItemType type
 */
class GetItemType extends DataType
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
