<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the TwoOperandExpressionType type
 */
class TwoOperandExpressionType extends DataType
{
    /**
     * Path property
     *
     * @var EWSType_BasePathToElementType
     */
    public $Path;

    /**
     * FieldURIOrConstant property
     *
     * @var EWSType_FieldURIOrConstantType
     */
    public $FieldURIOrConstant;
}
