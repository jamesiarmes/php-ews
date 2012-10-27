<?php
/**
 * Contains EWSType_FindFolderType.
 */

/**
 * Defines a request to find folders in a mailbox.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_FindFolderType extends EWSType
{
    /**
     * Identifies the folder properties to include in a FindFolder response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderResponseShapeType
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
     * @var EWSType_FractionalPageViewType
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
     * @var EWSType_IndexedPageViewType
     */
    public $IndexedPageFolderView;

    /**
     * Identifies folders for the FindFolder operation to search.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
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
     * @var EWSType_RestrictionType
     */
    public $Restriction;

    /**
     * Defines how a search is performed.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderQueryTraversalType
     */
    public $Traversal;
}
