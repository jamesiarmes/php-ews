<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\SyncFolderHierarchyType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to synchronize a folder hierarchy on a client.
 *
 * @package php-ews\Request
 */
class SyncFolderHierarchyType extends BaseRequestType
{
    /**
     * Identifies the folder properties to include in a SyncFolderHierarchy
     * response.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * Represents the folder that contains the items to synchronize.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\TargetFolderIdType
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
