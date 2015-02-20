<?php
/**
 * Contains SyncFolderItemsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to synchronize items in an Exchange store folder.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class SyncFolderItemsType extends EWSType
{
    /**
     * Identifies items to skip during synchronization.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfBaseItemIdsType
     */
    public $Ignore;

    /**
     * Identifies the item properties and content to include in a
     * SyncFolderItems response.
     *
     * This element is required.
     *
     * @since Exchange 2007
     *
     * @var ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * Describes the maximum number of changes that can be returned in a
     * synchronization response.
     *
     * This element is required.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MaxChangesReturned;

    /**
     * Represents the folder that contains the items to synchronize.
     *
     * This element is required.
     *
     * @since Exchange 2007
     *
     * @var TargetFolderIdType
     */
    public $SyncFolderId;

    /**
     * Specifies whether just items or items and folder associated information
     * are returned in a synchronization response.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var SyncFolderItemsScopeType
     */
    public $SyncScope;

    /**
     * Contains a base64-encoded form of the synchronization data that is
     * updated after each successful request.
     *
     * This is used to identify the synchronization state.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $SyncState;
}
