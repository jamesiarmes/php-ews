<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SyncFolderHierarchyDeleteType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Identifies a single folder to delete in the local client store.
 *
 * @package php-ews\Type
 */
class SyncFolderHierarchyDeleteType extends Type
{
    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderIdType
     */
    public $FolderId;
}
