<?php
/**
 * Definition of the RestrictionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the RestrictionType type
 */
class EWSType_RestrictionType extends EWSType
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
