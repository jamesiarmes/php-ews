<?php
/**
 * Definition of the BaseNotificationEventType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the BaseNotificationEventType type
 */
class BaseNotificationEventType extends PhpEws\EWSType
{
    /**
     * Watermark property
     *
     * @var WatermarkType
     */
    public $Watermark;
}
