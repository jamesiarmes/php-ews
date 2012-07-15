<?php
/**
 * Definition of the ConvertIdResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ConvertIdResponseMessageType type
 */
class EWSType_ConvertIdResponseMessageType extends EWSType
{
    /**
     * AlternateId property
     *
     * @var EWSType_AlternateIdBaseType
     */
    public $AlternateId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'AlternateId',
                'required' => false,
                'type' => 'AlternateIdBaseType',
            ),
        );
    }
}
