<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\AttachmentInfoResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and result of a single CreateAttachment operation
 * request.
 *
 * @package php-ews\Types
 */
class AttachmentInfoResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the items or files that are attached to an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ArrayOfAttachmentsType
     */
    public $Attachments;
}
