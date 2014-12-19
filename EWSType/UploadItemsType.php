<?php
/**
 * Contains EWSType_UploadItemsType.
 */

/**
 * Represents a request to upload items into a mailbox.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_UploadItemsType extends EWSType
{
    /**
     * Contains an array of items to upload into a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_NonEmptyArrayOfUploadItemsType
     */
    public $Items;
}
