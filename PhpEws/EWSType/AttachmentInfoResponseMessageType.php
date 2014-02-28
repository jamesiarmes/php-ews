<?php
/**
 * Definition of the AttachmentInfoResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the AttachmentInfoResponseMessageType type
 */
class AttachmentInfoResponseMessageType extends PhpEws\EWSType
{
    /**
     * Attachments property
     *
     * @var ArrayOfAttachmentsType
     */
    public $Attachments;
}
