<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ManagedFolderInformationType
 *
 * Compound property for Managed Folder related information for Managed Folders.
 * XSD Type: ManagedFolderInformationType
 *
 * @method boolean getCanDelete()
 * @method ManagedFolderInformationType setCanDelete(boolean $canDelete)
 * @method boolean getCanRenameOrMove()
 * @method ManagedFolderInformationType setCanRenameOrMove(boolean $canRenameOrMove)
 * @method boolean getMustDisplayComment()
 * @method ManagedFolderInformationType setMustDisplayComment(boolean $mustDisplayComment)
 * @method boolean getHasQuota()
 * @method ManagedFolderInformationType setHasQuota(boolean $hasQuota)
 * @method boolean getIsManagedFoldersRoot()
 * @method ManagedFolderInformationType setIsManagedFoldersRoot(boolean $isManagedFoldersRoot)
 * @method string getManagedFolderId()
 * @method ManagedFolderInformationType setManagedFolderId(string $managedFolderId)
 * @method string getComment()
 * @method ManagedFolderInformationType setComment(string $comment)
 * @method integer getStorageQuota()
 * @method ManagedFolderInformationType setStorageQuota(integer $storageQuota)
 * @method integer getFolderSize()
 * @method ManagedFolderInformationType setFolderSize(integer $folderSize)
 * @method string getHomePage()
 * @method ManagedFolderInformationType setHomePage(string $homePage)
 */
class ManagedFolderInformationType extends Type
{

    /**
     * @var boolean
     */
    protected $canDelete = null;

    /**
     * @var boolean
     */
    protected $canRenameOrMove = null;

    /**
     * @var boolean
     */
    protected $mustDisplayComment = null;

    /**
     * @var boolean
     */
    protected $hasQuota = null;

    /**
     * @var boolean
     */
    protected $isManagedFoldersRoot = null;

    /**
     * @var string
     */
    protected $managedFolderId = null;

    /**
     * @var string
     */
    protected $comment = null;

    /**
     * @var integer
     */
    protected $storageQuota = null;

    /**
     * @var integer
     */
    protected $folderSize = null;

    /**
     * @var string
     */
    protected $homePage = null;
}
