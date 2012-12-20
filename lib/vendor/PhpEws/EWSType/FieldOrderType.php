<?php
/**
 * Definition of the FieldOrderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FieldOrderType type
 */
class EWSType_FieldOrderType extends EWSType
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
