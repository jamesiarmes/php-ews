<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfAttachmentsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use jamesiarmes\PhpEws\ArrayType;

/**
 * Contains the items or files that are attached to an item in the Exchange
 * store.
 *
 * @package php-ews\Type
 *
 * @todo Figure out how to handle array classes.
 */
class ArrayOfAttachmentsType extends ArrayType
{
    /**
     * Represents a file that is attached to an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FileAttachmentType[]
     */
    public $FileAttachment;

    /**
     * Represents an Exchange item that is attached to another Exchange item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemAttachmentType[]
     */
    public $ItemAttachment;
}
