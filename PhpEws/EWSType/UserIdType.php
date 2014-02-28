<?php
/**
 * Definition of the UserIdType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the UserIdType type
 */
class UserIdType extends PhpEws\EWSType
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
     * @var DistinguishedUserType
     */
    public $DistinguishedUser;
}
