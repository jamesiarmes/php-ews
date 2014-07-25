<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the BaseSubscriptionRequestType type
 */
class BaseSubscriptionRequestType extends DataType
{
    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * EventTypes property
     *
     * @var NonEmptyArrayOfNotificationEventTypesType
     */
    public $EventTypes;

    /**
     * Watermark property
     *
     * @var WatermarkType
     */
    public $Watermark;
}
