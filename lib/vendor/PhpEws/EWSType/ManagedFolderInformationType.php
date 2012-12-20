<?php
/**
 * Definition of the ManagedFolderInformationType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ManagedFolderInformationType type
 */
class EWSType_ManagedFolderInformationType extends EWSType
{
    /**
     * CanDelete property
     *
     * @var boolean
     */
    public $CanDelete;

    /**
     * CanRenameOrMove property
     *
     * @var boolean
     */
    public $CanRenameOrMove;

    /**
     * MustDisplayComment property
     *
     * @var boolean
     */
    public $MustDisplayComment;

    /**
     * HasQuota property
     *
     * @var boolean
     */
    public $HasQuota;

    /**
     * IsManagedFoldersRoot property
     *
     * @var boolean
     */
    public $IsManagedFoldersRoot;

    /**
     * ManagedFolderId property
     *
     * @var string
     */
    public $ManagedFolderId;

    /**
     * Comment property
     *
     * @var string
     */
    public $Comment;

    /**
     * StorageQuota property
     *
     * @var integer
     */
    public $StorageQuota;

    /**
     * FolderSize property
     *
     * @var integer
     */
    public $FolderSize;

    /**
     * HomePage property
     *
     * @var string
     */
    public $HomePage;
}
