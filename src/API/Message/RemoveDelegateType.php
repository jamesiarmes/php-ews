<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing RemoveDelegateType
 *
 *
 * XSD Type: RemoveDelegateType
 *
 * @method RemoveDelegateType addUserIds(\jamesiarmes\PEWS\API\Type\UserIdType $userIds)
 * @method \jamesiarmes\PEWS\API\Type\UserIdType[] getUserIds()
 * @method RemoveDelegateType setUserIds(array $userIds)
 */
class RemoveDelegateType extends BaseDelegateType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserIdType[]
     */
    protected $userIds = null;
}
