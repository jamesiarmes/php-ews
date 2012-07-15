<?php
/**
 * Definition of the SetUserOofSettingsResponse type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SetUserOofSettingsResponse type
 */
class EWSType_SetUserOofSettingsResponse extends EWSType
{
    /**
     * ResponseMessage property
     *
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ResponseMessage',
                'required' => false,
                'type' => 'ResponseMessageType',
            ),
        );
    }
}
