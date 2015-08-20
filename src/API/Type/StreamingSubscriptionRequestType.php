<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing StreamingSubscriptionRequestType
 *
 *
 * XSD Type: StreamingSubscriptionRequestType
 *
 * @method boolean getSubscribeToAllFolders()
 * @method StreamingSubscriptionRequestType setSubscribeToAllFolders(boolean $subscribeToAllFolders)
 * @method NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method StreamingSubscriptionRequestType setFolderIds(NonEmptyArrayOfBaseFolderIdsType $folderIds)
 * @method array getEventTypes()
 * @method StreamingSubscriptionRequestType setEventTypes(array $eventTypes)
 */
class StreamingSubscriptionRequestType extends Type
{

    /**
     * @var boolean
     */
    protected $subscribeToAllFolders = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;

    /**
     * @var string[]
     */
    protected $eventTypes = null;
}
