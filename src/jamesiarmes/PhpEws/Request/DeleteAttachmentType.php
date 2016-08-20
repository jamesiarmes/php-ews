<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\DeleteAttachmentType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents a request to delete an attachment from the Exchange store.
 *
 * @package php-ews\Request
 */
class DeleteAttachmentType extends BaseRequestType
{
    /**
     * Contains an array of attachment identifiers that are used to delete the
     * attachments.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
