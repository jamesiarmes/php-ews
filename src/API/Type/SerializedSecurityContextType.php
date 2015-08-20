<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SerializedSecurityContextType
 *
 *
 * XSD Type: SerializedSecurityContextType
 *
 * @method SerializedSecurityContextType getUserSid()
 * @method SerializedSecurityContextType setUserSid(string $userSid)
 * @method SerializedSecurityContextType getGroupSids()
 * @method SerializedSecurityContextType setGroupSids(array $groupSids)
 * @method SerializedSecurityContextType getRestrictedGroupSids()
 * @method SerializedSecurityContextType setRestrictedGroupSids(array $restrictedGroupSids)
 * @method SerializedSecurityContextType getPrimarySmtpAddress()
 * @method SerializedSecurityContextType setPrimarySmtpAddress(string $primarySmtpAddress)
 */
class SerializedSecurityContextType extends Type
{

    /**
     * @property string $userSid
     */
    protected $userSid = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SidAndAttributesType[] $groupSids
     */
    protected $groupSids = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SidAndAttributesType[] $restrictedGroupSids
     */
    protected $restrictedGroupSids = null;

    /**
     * @property string $primarySmtpAddress
     */
    protected $primarySmtpAddress = null;


}

