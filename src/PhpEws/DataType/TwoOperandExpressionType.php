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
