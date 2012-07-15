<?php
/**
 * Definition of the ConnectingSIDType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ConnectingSIDType type
 */
class EWSType_ConnectingSIDType extends EWSType
{
    /**
     * PrincipalName property
     *
     * @var string
     */
    public $PrincipalName;

    /**
     * SID property
     *
     * @var string
     */
    public $SID;

    /**
     * PrimarySmtpAddress property
     *
     * @var string
     */
    public $PrimarySmtpAddress;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'PrincipalName',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'SID',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'PrimarySmtpAddress',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
