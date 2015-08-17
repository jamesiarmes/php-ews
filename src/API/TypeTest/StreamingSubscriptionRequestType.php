<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class StreamingSubscriptionRequestType extends TypeTest
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
     * @property string[] $eventTypes
     */
    protected $eventTypes = null;


}

