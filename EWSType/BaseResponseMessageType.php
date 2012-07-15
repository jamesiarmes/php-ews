<?php
/**
 * Definition of the BaseResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the BaseResponseMessageType type
 */
class EWSType_BaseResponseMessageType extends EWSType
{
    /**
     * ResponseMessages property
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ResponseMessages',
                'required' => false,
                'type' => 'ArrayOfResponseMessagesType',
            ),
        );
    }
}
