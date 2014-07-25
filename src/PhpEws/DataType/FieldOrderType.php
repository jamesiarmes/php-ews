<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FieldOrderType type
 */
class FieldOrderType extends DataType
{
    /**
     * Path property
     *
     * @var BasePathToElementType
     */
    public $Path;

    /**
     * Order property
     *
     * @var SortDirectionType
     */
    public $Order;
}
