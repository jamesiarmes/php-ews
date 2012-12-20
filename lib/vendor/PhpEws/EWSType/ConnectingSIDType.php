<?php
/**
 * Definition of the ConnectingSIDType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the ConnectingSIDType type
 */
class ConnectingSIDType extends EWSType
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
}
