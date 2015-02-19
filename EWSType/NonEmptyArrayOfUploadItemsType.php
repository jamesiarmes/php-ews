<?php
/**
 * Contains EWSType_NonEmptyArrayOfUploadItemsType.
 */

/**
 * Represents an array of items to upload into a mailbox.
 *
 * @package php-ews\Type
 */
class EWSType_NonEmptyArrayOfUploadItemsType extends EWSType
{
    /**
     * Represents a single item to upload into a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\UploadItemType
     */
    public $Item;
}
