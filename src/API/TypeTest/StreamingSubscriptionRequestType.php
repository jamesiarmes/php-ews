<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing StreamingSubscriptionRequestType
 *
 *
 * XSD Type: StreamingSubscriptionRequestType
 *
 * @method StreamingSubscriptionRequestType getSubscribeToAllFolders()
 * @method StreamingSubscriptionRequestType
 * setSubscribeToAllFolders($subscribeToAllFolders)
 * @method StreamingSubscriptionRequestType getFolderIds()
 * @method StreamingSubscriptionRequestType setFolderIds($folderIds)
 * @method StreamingSubscriptionRequestType getEventTypes()
 * @method StreamingSubscriptionRequestType setEventTypes($eventTypes)
 */
class StreamingSubscriptionRequestType extends Type
{

    /**
     * @property boolean $subscribeToAllFolders
     */
    protected $subscribeToAllFolders = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType
     * $folderIds
     */
    protected $folderIds = null;

    /**
     * @property array $eventTypes
     */
    protected $eventTypes = null;


}

