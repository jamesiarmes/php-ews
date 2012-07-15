<?php
/**
 * Definition of the ExistsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ExistsType type
 */
class EWSType_ExistsType extends EWSType
{
    /**
     * Path property
     *
     * @var EWSType_BasePathToElementType
     */
    public $Path;

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
        );
    }
}
