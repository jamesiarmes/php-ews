<?php
/**
 * Definition of the FreeBusyResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FreeBusyResponseType type
 */
class EWSType_FreeBusyResponseType extends EWSType
{
    /**
     * ResponseMessage property
     *
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * FreeBusyView property
     *
     * @var EWSType_FreeBusyView
     */
    public $FreeBusyView;

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
            array(
                'name' => 'FreeBusyView',
                'required' => false,
                'type' => 'FreeBusyView',
            ),
        );
    }
}
