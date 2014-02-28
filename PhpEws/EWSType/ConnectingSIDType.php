<?php
/**
 * Definition of the ConnectingSIDType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ConnectingSIDType type
 */
class ConnectingSIDType extends PhpEws\EWSType
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
