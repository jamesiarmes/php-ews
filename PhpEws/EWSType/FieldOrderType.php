<?php
/**
 * Definition of the FieldOrderType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the FieldOrderType type
 */
class FieldOrderType extends PhpEws\EWSType
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
