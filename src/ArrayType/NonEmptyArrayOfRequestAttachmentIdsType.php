<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfRequestAttachmentIdsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of attachment identifiers.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfRequestAttachmentIdsType extends ArrayType
{
    /**
     * The element that identifies a single attachment.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\RequestAttachmentIdType[]
     */
    public $AttachmentId = array();
}
