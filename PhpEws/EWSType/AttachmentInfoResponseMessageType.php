<?php
/**
 * Definition of the AttachmentInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the AttachmentInfoResponseMessageType type
 */
class AttachmentInfoResponseMessageType extends EWSType
{
    /**
     * Attachments property
     *
     * @var EWSType_ArrayOfAttachmentsType
     */
    public $Attachments;
}
