<?php
/**
 * Definition of the TwoOperandExpressionType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the TwoOperandExpressionType type
 */
class TwoOperandExpressionType extends PhpEws\EWSType
{
    /**
     * Path property
     *
     * @var BasePathToElementType
     */
    public $Path;

    /**
     * FieldURIOrConstant property
     *
     * @var FieldURIOrConstantType
     */
    public $FieldURIOrConstant;
}
