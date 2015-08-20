<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserIdType
 *
 *
 * XSD Type: UserIdType
 *
 * @method string getSID()
 * @method UserIdType setSID(string $sID)
 * @method string getPrimarySmtpAddress()
 * @method UserIdType setPrimarySmtpAddress(string $primarySmtpAddress)
 * @method string getDisplayName()
 * @method UserIdType setDisplayName(string $displayName)
 * @method string getDistinguishedUser()
 * @method UserIdType setDistinguishedUser(string $distinguishedUser)
 * @method string getExternalUserIdentity()
 * @method UserIdType setExternalUserIdentity(string $externalUserIdentity)
 */
class UserIdType extends Type
{

    /**
     * @var string
     */
    protected $sID = null;

    /**
     * @var string
     */
    protected $primarySmtpAddress = null;

    /**
     * @var string
     */
    protected $displayName = null;

    /**
     * @var string
     */
    protected $distinguishedUser = null;

    /**
     * @var string
     */
    protected $externalUserIdentity = null;
}
