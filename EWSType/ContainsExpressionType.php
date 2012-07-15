<?php
/**
 * Definition of the ContainsExpressionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ContainsExpressionType type
 */
class EWSType_ContainsExpressionType extends EWSType
{
    /**
     * Path property
     *
     * @var EWSType_BasePathToElementType
     */
    public $Path;

    /**
     * Constant property
     *
     * @var EWSType_ConstantValueType
     */
    public $Constant;

    /**
     * ContainmentMode property
     *
     * @var EWSType_ContainmentModeType
     */
    public $ContainmentMode;

    /**
     * ContainmentComparison property
     *
     * @var EWSType_ContainmentComparisonType
     */
    public $ContainmentComparison;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Path',
                'required' => false,
                'type' => 'BasePathToElementType',
            ),
            array(
                'name' => 'Constant',
                'required' => false,
                'type' => 'ConstantValueType',
            ),
            array(
                'name' => 'ContainmentMode',
                'required' => false,
                'type' => 'ContainmentModeType',
            ),
            array(
                'name' => 'ContainmentComparison',
                'required' => false,
                'type' => 'ContainmentComparisonType',
            ),
        );
    }
}
