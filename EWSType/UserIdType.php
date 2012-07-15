<?php
/**
 * Definition of the UserIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the UserIdType type
 */
class EWSType_UserIdType extends EWSType
{
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
     * DisplayName property
     *
     * @var string
     */
    public $DisplayName;

    /**
     * DistinguishedUser property
     *
     * @var EWSType_DistinguishedUserType
     */
    public $DistinguishedUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
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
            array(
                'name' => 'DisplayName',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'DistinguishedUser',
                'required' => false,
                'type' => 'DistinguishedUserType',
            ),
        );
    }
}
