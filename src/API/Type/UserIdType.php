<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserIdType
 *
 *
 * XSD Type: UserIdType
 *
 * @method UserIdType getSID()
 * @method UserIdType setSID(string $sID)
 * @method UserIdType getPrimarySmtpAddress()
 * @method UserIdType setPrimarySmtpAddress(string $primarySmtpAddress)
 * @method UserIdType getDisplayName()
 * @method UserIdType setDisplayName(string $displayName)
 * @method UserIdType getDistinguishedUser()
 * @method UserIdType setDistinguishedUser(string $distinguishedUser)
 * @method UserIdType getExternalUserIdentity()
 * @method UserIdType setExternalUserIdentity(string $externalUserIdentity)
 */
class UserIdType extends Type
{

    /**
     * @property string $sID
     */
    protected $sID = null;

    /**
     * @property string $primarySmtpAddress
     */
    protected $primarySmtpAddress = null;

    /**
     * @property string $displayName
     */
    protected $displayName = null;

    /**
     * @property string $distinguishedUser
     */
    protected $distinguishedUser = null;

    /**
     * @property string $externalUserIdentity
     */
    protected $externalUserIdentity = null;


}

