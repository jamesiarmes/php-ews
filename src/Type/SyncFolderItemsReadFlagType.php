<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SyncFolderItemsReadFlagType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Identifies whether or not an item has been read.
 *
 * @package php-ews\Type
 */
class SyncFolderItemsReadFlagType extends Type
{
    /**
     * Indicates whether the read-flag has been set to true.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * Identifies the item for which the read-flag has been changed.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ItemId;
}
