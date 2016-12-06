<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\MarkAllItemsAsRead.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to mark all the items in a folder as read.
 *
 * @package php-ews\Request
 */
class MarkAllItemsAsRead extends BaseRequestType
{
    /**
     * Contains an array of folder identifiers that are used to identify folders
     * mark items within.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Indicates the read state to set on items in a folder.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $ReadFlag;

    /**
     * Indicates whether read receipts should be suppressed.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $SuppressReadReceipts;
}
