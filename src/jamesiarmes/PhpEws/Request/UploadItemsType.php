<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\UploadItemsType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents a request to upload items into a mailbox.
 *
 * @package php-ews\Request
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
