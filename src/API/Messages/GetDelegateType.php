<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetDelegateType
 *
 *
 * XSD Type: GetDelegateType
 *
 * @method GetDelegateType getIncludePermissions()
 * @method GetDelegateType setIncludePermissions($includePermissions)
 * @method GetDelegateType getUserIds()
 * @method GetDelegateType setUserIds($userIds)
 */
class GetDelegateType extends BaseDelegateType
{

    /**
     * @property boolean $includePermissions
     */
    protected $includePermissions = null;

    /**
     * @property array $userIds
     */
    protected $userIds = null;


}

