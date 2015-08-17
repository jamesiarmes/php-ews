<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class SerializedSecurityContextType extends TypeTest
{

    /**
     * @property string $userSid
     */
    protected $userSid = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SidAndAttributesType[] $groupSids
     */
    protected $groupSids = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SidAndAttributesType[]
     * $restrictedGroupSids
     */
    protected $restrictedGroupSids = null;

    /**
     * @property string $primarySmtpAddress
     */
    protected $primarySmtpAddress = null;


}

