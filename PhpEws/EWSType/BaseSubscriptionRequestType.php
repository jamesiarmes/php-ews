<?php
/**
 * Definition of the BaseSubscriptionRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BaseSubscriptionRequestType type
 */
class BaseSubscriptionRequestType extends EWSType
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
