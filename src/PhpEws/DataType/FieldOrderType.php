<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the FieldOrderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FieldOrderType type
 */
class FieldOrderType extends DataType
{
    /**
     * Path property
     *
     * @var EWSType_BasePathToElementType
     */
    public $Path;

    /**
     * Order property
     *
     * @var EWSType_SortDirectionType
     */
    public $Order;
}
