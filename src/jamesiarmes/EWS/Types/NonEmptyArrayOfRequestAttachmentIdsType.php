<?php
/**
 * Contains NonEmptyArrayOfRequestAttachmentIdsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of attachment identifiers.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfRequestAttachmentIdsType extends EWSType
{
    /**
     * The element that identifies a single attachment.
     *
     * @since Exchange 2007
     *
     * @var RequestAttachmentIdType
     */
    public $AttachmentId;
}
