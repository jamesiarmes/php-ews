<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SyncFolderItemsDeleteType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Identifies a single item to delete in the local client store.
 *
 * @package php-ews\Type
 */
class SyncFolderItemsDeleteType extends Type
{
    /**
     * Contains the unique identifier and change key of an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ItemId;
}
