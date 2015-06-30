<?php
/**
 * Contains \jamesiarmes\PEWS\API\Type\ArrayOfAttachmentsType.
 */

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Contains the items or files that are attached to an item in the Exchange
 * store.
 *
 * @package php-ews\Types
 */
class ArrayOfAttachmentsType extends Type
{
    /**
     * Represents a file that is attached to an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\API\Type\FileAttachmentType
     */
    public $FileAttachment;

    /**
     * Represents an Exchange item that is attached to another Exchange item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\API\Type\ItemAttachmentType
     */
    public $ItemAttachment;
}
