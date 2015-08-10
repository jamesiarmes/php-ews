<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing BaseSubscriptionRequestType
 *
 *
 * XSD Type: BaseSubscriptionRequestType
 *
 * @method BaseSubscriptionRequestType getSubscribeToAllFolders()
 * @method BaseSubscriptionRequestType
 * setSubscribeToAllFolders($subscribeToAllFolders)
 * @method BaseSubscriptionRequestType getFolderIds()
 * @method BaseSubscriptionRequestType setFolderIds($folderIds)
 * @method BaseSubscriptionRequestType getEventTypes()
 * @method BaseSubscriptionRequestType setEventTypes($eventTypes)
 * @method BaseSubscriptionRequestType getWatermark()
 * @method BaseSubscriptionRequestType setWatermark($watermark)
 */
class BaseSubscriptionRequestType extends Type
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

    /**
     * @property string $watermark
     */
    protected $watermark = null;


}

