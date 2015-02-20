<?php
/**
 * Contains SyncFolderHierarchyChangesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a sequenced array of change types that represent the type of
 * differences between the folders on the client and the folders on the computer
 * that is running Microsoft Exchange Server 2007.
 *
 * @package jamesiarmes\EWS\Types
 */
class SyncFolderHierarchyChangesType extends EWSType
{
    /**
     * Identifies a single folder to create in the local client store.
     *
     * @since Exchange 2007
     *
     * @var SyncFolderHierarchyCreateOrUpdateType
     */
    public $Create;

    /**
     * Identifies a single folder to delete in the local client store.
     *
     * @since Exchange 2007
     *
     * @var SyncFolderHierarchyDeleteType
     */
    public $Delete;

    /**
     * Identifies a single folder to update in the local client store.
     *
     * @since Exchange 2007
     *
     * @var SyncFolderHierarchyCreateOrUpdateType
     */
    public $Update;
}
