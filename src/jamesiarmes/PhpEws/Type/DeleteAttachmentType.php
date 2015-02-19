<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\DeleteAttachmentType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a request to delete an attachment from the Exchange store.
 *
 * @package php-ews\Types
 */
class DeleteAttachmentType extends BaseRequestType
{
    /**
     * Contains an array of attachment identifiers that are used to delete the
     * attachments.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
