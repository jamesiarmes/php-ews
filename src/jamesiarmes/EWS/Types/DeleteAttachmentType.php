<?php
/**
 * Contains DeleteAttachmentType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a request to delete an attachment from the Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class DeleteAttachmentType extends EWSType
{
    /**
     * Contains an array of attachment identifiers that are used to delete the
     * attachments.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
