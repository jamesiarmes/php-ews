<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing StreamingSubscriptionRequestType
 *
 *
 * XSD Type: StreamingSubscriptionRequestType
 *
 * @method StreamingSubscriptionRequestType getSubscribeToAllFolders()
 * @method StreamingSubscriptionRequestType setSubscribeToAllFolders(boolean $subscribeToAllFolders)
 * @method StreamingSubscriptionRequestType getFolderIds()
 * @method StreamingSubscriptionRequestType setFolderIds(NonEmptyArrayOfBaseFolderIdsType $folderIds)
 * @method StreamingSubscriptionRequestType getEventTypes()
 * @method StreamingSubscriptionRequestType setEventTypes(array $eventTypes)
 */
class StreamingSubscriptionRequestType extends Type
{

    /**
     * @property boolean $subscribeToAllFolders
     */
    protected $subscribeToAllFolders = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    protected $folderIds = null;

    /**
     * @property string[] $eventTypes
     */
    protected $eventTypes = null;


}

