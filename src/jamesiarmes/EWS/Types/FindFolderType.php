<?php
/**
 * Contains FindFolderType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to find folders in a mailbox.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class FindFolderType extends EWSType
{
    /**
     * Identifies the folder properties to include in a FindFolder response.
     *
     * @since Exchange 2007
     *
     * @var FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * Describes where the paged view starts and the maximum number of folders
     * returned in a FindFolder request.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var FractionalPageViewType
     */
    public $FractionalPageFolderView;

    /**
     * Describes how paged item information is returned in a FindFolder
     * response.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var IndexedPageViewType
     */
    public $IndexedPageFolderView;

    /**
     * Identifies folders for the FindFolder operation to search.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * Defines a restriction or query that is used to filter folders in a
     * FindFolder operation.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var RestrictionType
     */
    public $Restriction;

    /**
     * Defines how a search is performed.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var FolderQueryTraversalType
     */
    public $Traversal;
}
