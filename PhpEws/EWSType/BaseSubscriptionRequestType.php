<?php
/**
 * Definition of the BaseSubscriptionRequestType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the BaseSubscriptionRequestType type
 */
class BaseSubscriptionRequestType extends PhpEws\EWSType
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
