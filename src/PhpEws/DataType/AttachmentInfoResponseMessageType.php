<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the AttachmentInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AttachmentInfoResponseMessageType type
 */
class AttachmentInfoResponseMessageType extends DataType
{
    /**
     * Attachments property
     *
     * @var EWSType_ArrayOfAttachmentsType
     */
    public $Attachments;
}
