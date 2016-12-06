<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ManagedFolderInformationType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Compound property for Managed Folder related information for Managed Folders.
 *
 * @package php-ews\Type
 */
class ManagedFolderInformationType extends Type
{
    /**
     * Indicates whether a managed folder can be deleted by a customer.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $CanDelete;

    /**
     * Indicates whether a given managed folder can be renamed or moved by the
     * customer.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $CanRenameOrMove;

    /**
     * Contains the comment that is associated with a managed folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Comment;

    /**
     * Describes the total size of all the contents of a managed folder.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $FolderSize;

    /**
     * Indicates whether the managed folder has a quota.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $HasQuota;

    /**
     * Specifies the URL that will be the default home page for the managed
     * folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $HomePage;

    /**
     * Indicates whether the managed folder is the root for all managed folders.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsManagedFoldersRoot;

    /**
     * Contains the folder ID of the managed folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ManagedFolderId;

    /**
     * Indicates whether the managed folder comment must be displayed.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $MustDisplayComment;

    /**
     * Describes the storage quota for the managed folder.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $StorageQuota;
}
