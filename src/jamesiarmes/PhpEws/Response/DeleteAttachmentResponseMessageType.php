<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\DeleteAttachmentResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the status and result of a single DeleteAttachment operation
 * request.
 *
 * @package php-ews\Response
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
