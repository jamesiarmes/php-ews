<?php
/**
 * Definition of the ChangeDescriptionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ChangeDescriptionType type
 */
class EWSType_ChangeDescriptionType extends EWSType
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
