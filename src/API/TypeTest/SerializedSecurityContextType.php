<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SerializedSecurityContextType
 *
 *
 * XSD Type: SerializedSecurityContextType
 *
 * @method SerializedSecurityContextType getUserSid()
 * @method SerializedSecurityContextType setUserSid($userSid)
 * @method SerializedSecurityContextType getGroupSids()
 * @method SerializedSecurityContextType setGroupSids($groupSids)
 * @method SerializedSecurityContextType getRestrictedGroupSids()
 * @method SerializedSecurityContextType
 * setRestrictedGroupSids($restrictedGroupSids)
 * @method SerializedSecurityContextType getPrimarySmtpAddress()
 * @method SerializedSecurityContextType setPrimarySmtpAddress($primarySmtpAddress)
 */
class SerializedSecurityContextType extends Type
{

    /**
     * @property string $userSid
     */
    protected $userSid = null;

    /**
     * @property array $groupSids
     */
    protected $groupSids = null;

    /**
     * @property array $restrictedGroupSids
     */
    protected $restrictedGroupSids = null;

    /**
     * @property string $primarySmtpAddress
     */
    protected $primarySmtpAddress = null;


}

