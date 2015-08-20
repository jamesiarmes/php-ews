<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing BaseSubscriptionRequestType
 *
 *
 * XSD Type: BaseSubscriptionRequestType
 *
 * @method boolean getSubscribeToAllFolders()
 * @method BaseSubscriptionRequestType setSubscribeToAllFolders(boolean $subscribeToAllFolders)
 * @method NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method BaseSubscriptionRequestType setFolderIds(NonEmptyArrayOfBaseFolderIdsType $folderIds)
 * @method array getEventTypes()
 * @method BaseSubscriptionRequestType setEventTypes(array $eventTypes)
 * @method string getWatermark()
 * @method BaseSubscriptionRequestType setWatermark(string $watermark)
 */
class BaseSubscriptionRequestType extends Type
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

    /**
     * @var string
     */
    protected $watermark = null;
}
