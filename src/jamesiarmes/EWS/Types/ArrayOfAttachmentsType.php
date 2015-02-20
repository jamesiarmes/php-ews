<?php
/**
 * Contains ArrayOfAttachmentsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Contains the items or files that are attached to an item in the Exchange
 * store.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfAttachmentsType extends EWSType
{
    /**
     * Represents a file that is attached to an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var FileAttachmentType
     */
    public $FileAttachment;

    /**
     * Represents an Exchange item that is attached to another Exchange item.
     *
     * @since Exchange 2007
     *
     * @var ItemAttachmentType
     */
    public $ItemAttachment;
}
