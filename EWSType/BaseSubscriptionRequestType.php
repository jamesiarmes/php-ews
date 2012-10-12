<?php
/**
 * Definition of the BaseSubscriptionRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the BaseSubscriptionRequestType type
 */
class EWSType_BaseSubscriptionRequestType extends EWSType
{
    /**
     * FolderIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * EventTypes property
     *
     * @var EWSType_NonEmptyArrayOfNotificationEventTypesType
     */
    public $EventTypes;

    /**
     * Watermark property
     *
     * @var EWSType_WatermarkType
     */
    public $Watermark;
}
