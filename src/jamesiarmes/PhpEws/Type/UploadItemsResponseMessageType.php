<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UploadItemsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * the status and results of a request to upload a single mailbox item.
 *
 * @package php-ews\Types
 */
class UploadItemsResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the item identifier of an uploaded item.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ItemId;
}
