<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UploadItemsType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a request to upload items into a mailbox.
 *
 * @package php-ews\Types
 */
class UploadItemsType extends BaseRequestType
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
