<?php
/**
 * Definition of the FieldURIOrConstantType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FieldURIOrConstantType type
 */
class EWSType_FieldURIOrConstantType extends EWSType
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
        );
    }
}
