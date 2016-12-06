<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\AttachmentIdType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Identifies an item or file attachment.
 *
 * @package php-ews\Type
 */
class AttachmentIdType extends RequestAttachmentIdType
{
    /**
     * Identifies the unique identifier of the root store item to which the
     * attachment is attached.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $RootItemChangeKey;

    /**
     * Identifies the change key of the root store item to which the attachment
     * is attached.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $RootItemId;
}
