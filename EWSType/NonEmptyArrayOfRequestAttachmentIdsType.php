<?php
/**
 * Contains EWSType_NonEmptyArrayOfRequestAttachmentIdsType.
 */

/**
 * Represents an array of attachment identifiers.
 *
 * @package php-ews\Type
 */
class EWSType_NonEmptyArrayOfRequestAttachmentIdsType extends EWSType
{
    /**
     * The element that identifies a single attachment.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\RequestAttachmentIdType
     */
    public $AttachmentId;
}
