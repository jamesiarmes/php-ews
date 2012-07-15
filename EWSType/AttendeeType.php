<?php
/**
 * Definition of the AttendeeType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AttendeeType type
 */
class EWSType_AttendeeType extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * ResponseType property
     *
     * @var EWSType_ResponseTypeType
     */
    public $ResponseType;

    /**
     * LastResponseTime property
     *
     * @var EWSType_dateTime
     */
    public $LastResponseTime;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Mailbox',
                'required' => false,
                'type' => 'EmailAddressType',
            ),
            array(
                'name' => 'ResponseType',
                'required' => false,
                'type' => 'ResponseTypeType',
            ),
            array(
                'name' => 'LastResponseTime',
                'required' => false,
                'type' => 'dateTime',
            ),
        );
    }
}
