<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetDelegateType
 *
 *
 * XSD Type: GetDelegateType
 *
 * @method boolean getIncludePermissions()
 * @method GetDelegateType setIncludePermissions(boolean $includePermissions)
 * @method array getUserIds()
 * @method GetDelegateType setUserIds(array $userIds)
 */
class GetDelegateType extends BaseDelegateType
{

    /**
     * @var boolean
     */
    protected $includePermissions = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserIdType[]
     */
    protected $userIds = null;
}
