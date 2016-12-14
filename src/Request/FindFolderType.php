<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\FindFolderType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to find folders in a mailbox.
 *
 * @package php-ews\Request
 */
class FindFolderType extends BaseRequestType
{
    /**
     * Identifies the folder properties to include in a FindFolder response.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderResponseShapeType
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
     * @var \jamesiarmes\PhpEws\Type\FractionalPageViewType
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
     * @var \jamesiarmes\PhpEws\Type\IndexedPageViewType
     */
    public $IndexedPageFolderView;

    /**
     * Identifies folders for the FindFolder operation to search.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType
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
     * @var \jamesiarmes\PhpEws\Type\RestrictionType
     */
    public $Restriction;

    /**
     * Defines how a search is performed.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\FolderQueryTraversalType
     */
    public $Traversal;
}
