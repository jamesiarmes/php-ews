<?php
/**
 * Definition of the FieldOrderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FieldOrderType type
 */
class FieldOrderType extends EWSType
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
