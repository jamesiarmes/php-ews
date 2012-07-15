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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'CanDelete',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'CanRenameOrMove',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'MustDisplayComment',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'HasQuota',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'IsManagedFoldersRoot',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'ManagedFolderId',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Comment',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'StorageQuota',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'FolderSize',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'HomePage',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
