<?php
/**
 * Contains EWSType_SyncFolderHierarchyChangesType.
 */

/**
 * Represents a sequenced array of change types that represent the type of
 * differences between the folders on the client and the folders on the computer
 * that is running Microsoft Exchange Server 2007.
 *
 * @package php-ews\Types
 */
class EWSType_SyncFolderHierarchyChangesType extends EWSType
{
    /**
     * Identifies a single folder to create in the local client store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SyncFolderHierarchyCreateOrUpdateType
     */
    public $Create;

    /**
     * Identifies a single folder to delete in the local client store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SyncFolderHierarchyDeleteType
     */
    public $Delete;

    /**
     * Identifies a single folder to update in the local client store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SyncFolderHierarchyCreateOrUpdateType
     */
    public $Update;
}
