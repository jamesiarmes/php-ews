<?php
/**
 * Contains EWSType_ArrayOfAttachmentsType.
 */

/**
 * Contains the items or files that are attached to an item in the Exchange
 * store.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfAttachmentsType extends EWSType
{
    /**
     * Represents a file that is attached to an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FileAttachmentType
     */
    public $FileAttachment;

    /**
     * Represents an Exchange item that is attached to another Exchange item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemAttachmentType
     */
    public $ItemAttachment;
}
