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
     * @var EWSType_ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * ItemIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
