<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ArrayOfAttachmentsType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Contains the items or files that are attached to an item in the Exchange
 * store.
 *
 * @package php-ews\Type
 *
 * @todo Figure out how to handle array classes.
 */
class ArrayOfAttachmentsType extends Type
{
    /**
     * Represents a file that is attached to an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FileAttachmentType
     */
    public $FileAttachment;

    /**
     * Represents an Exchange item that is attached to another Exchange item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemAttachmentType
     */
    public $ItemAttachment;
}
