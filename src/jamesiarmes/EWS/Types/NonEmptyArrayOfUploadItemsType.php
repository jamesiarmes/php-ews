<?php
/**
 * Contains NonEmptyArrayOfUploadItemsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of items to upload into a mailbox.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfUploadItemsType extends EWSType
{
    /**
     * Represents a single item to upload into a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var UploadItemType
     */
    public $Item;
}
