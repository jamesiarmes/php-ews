<?php
/**
 * Contains EWSType_NonEmptyArrayOfRequestAttachmentIdsType.
 */

/**
 * Represents an array of attachment identifiers.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfRequestAttachmentIdsType extends EWSType
{
    /**
     * The element that identifies a single attachment.
     *
     * @since Exchange 2007
     *
     * @var EWSType_RequestAttachmentIdType
     */
    public $AttachmentId;
}
