<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the UserIdType type
 */
class UserIdType extends DataType
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
