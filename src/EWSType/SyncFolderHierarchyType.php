<?php
/**
 * Contains EWSType_SyncFolderHierarchyType.
 */

/**
 * Defines a request to synchronize a folder hierarchy on a client.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_SyncFolderHierarchyType extends EWSType
{
    /**
     * Identifies the folder properties to include in a SyncFolderHierarchy
     * response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * Represents the folder that contains the items to synchronize.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var EWSType_TargetFolderIdType
     */
    public $SyncFolderId;

    /**
     * Contains a base64-encoded form of the synchronization data that is
     * updated after each successful request.
     *
     * This is used to identify the synchronization state.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $SyncState;
}
