<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetDelegateType
 *
 *
 * XSD Type: GetDelegateType
 *
 * @method GetDelegateType getIncludePermissions()
 * @method GetDelegateType setIncludePermissions(boolean $includePermissions)
 * @method GetDelegateType getUserIds()
 * @method GetDelegateType setUserIds(array $userIds)
 */
class GetDelegateType extends BaseDelegateType
{

    /**
     * @property boolean $includePermissions
     */
    protected $includePermissions = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\UserIdType[] $userIds
     */
    protected $userIds = null;


}

