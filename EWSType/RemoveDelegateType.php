<?php
/**
 * Definition of the RemoveDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the RemoveDelegateType type
 */
class EWSType_RemoveDelegateType extends EWSType
{
    /**
     * UserIds property
     *
     * @var EWSType_ArrayOfUserIdType
     */
    public $UserIds;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'UserIds',
                'required' => false,
                'type' => 'ArrayOfUserIdType',
            ),
        );
    }
}
