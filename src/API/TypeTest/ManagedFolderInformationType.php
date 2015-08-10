<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ManagedFolderInformationType
 *
 * Compound property for Managed Folder related information for Managed Folders.
 * XSD Type: ManagedFolderInformationType
 *
 * @method ManagedFolderInformationType getCanDelete()
 * @method ManagedFolderInformationType setCanDelete($canDelete)
 * @method ManagedFolderInformationType getCanRenameOrMove()
 * @method ManagedFolderInformationType setCanRenameOrMove($canRenameOrMove)
 * @method ManagedFolderInformationType getMustDisplayComment()
 * @method ManagedFolderInformationType setMustDisplayComment($mustDisplayComment)
 * @method ManagedFolderInformationType getHasQuota()
 * @method ManagedFolderInformationType setHasQuota($hasQuota)
 * @method ManagedFolderInformationType getIsManagedFoldersRoot()
 * @method ManagedFolderInformationType
 * setIsManagedFoldersRoot($isManagedFoldersRoot)
 * @method ManagedFolderInformationType getManagedFolderId()
 * @method ManagedFolderInformationType setManagedFolderId($managedFolderId)
 * @method ManagedFolderInformationType getComment()
 * @method ManagedFolderInformationType setComment($comment)
 * @method ManagedFolderInformationType getStorageQuota()
 * @method ManagedFolderInformationType setStorageQuota($storageQuota)
 * @method ManagedFolderInformationType getFolderSize()
 * @method ManagedFolderInformationType setFolderSize($folderSize)
 * @method ManagedFolderInformationType getHomePage()
 * @method ManagedFolderInformationType setHomePage($homePage)
 */
class ManagedFolderInformationType extends Type
{

    /**
     * @property boolean $canDelete
     */
    protected $canDelete = null;

    /**
     * @property boolean $canRenameOrMove
     */
    protected $canRenameOrMove = null;

    /**
     * @property boolean $mustDisplayComment
     */
    protected $mustDisplayComment = null;

    /**
     * @property boolean $hasQuota
     */
    protected $hasQuota = null;

    /**
     * @property boolean $isManagedFoldersRoot
     */
    protected $isManagedFoldersRoot = null;

    /**
     * @property string $managedFolderId
     */
    protected $managedFolderId = null;

    /**
     * @property string $comment
     */
    protected $comment = null;

    /**
     * @property integer $storageQuota
     */
    protected $storageQuota = null;

    /**
     * @property integer $folderSize
     */
    protected $folderSize = null;

    /**
     * @property string $homePage
     */
    protected $homePage = null;


}

