<?php
/**
 * Definition of the MultipleOperandBooleanExpressionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the MultipleOperandBooleanExpressionType type
 */
class EWSType_MultipleOperandBooleanExpressionType extends EWSType
{
    /**
     * SearchExpression property
     *
     * @var EWSType_SearchExpressionType
     */
    public $SearchExpression;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SearchExpression',
                'required' => false,
                'type' => 'SearchExpressionType',
            ),
        );
    }
}
