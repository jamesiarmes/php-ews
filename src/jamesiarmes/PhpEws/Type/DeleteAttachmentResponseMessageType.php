<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\DeleteAttachmentResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and result of a single DeleteAttachment operation
 * request.
 *
 * @package php-ews\Types
 */
class DeleteAttachmentResponseMessageType extends ResponseMessageType
{
    /**
     * Identifies the parent item of a deleted attachment.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\RootItemIdType
     */
    public $RootItemId;
}
