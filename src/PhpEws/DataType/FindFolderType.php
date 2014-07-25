<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FindFolderType type
 */
class FindFolderType extends DataType
{
    /**
     * FolderShape property
     *
     * @var FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * IndexedPageFolderView property
     *
     * @var IndexedPageViewType
     */
    public $IndexedPageFolderView;

    /**
     * FractionalPageFolderView property
     *
     * @var FractionalPageViewType
     */
    public $FractionalPageFolderView;

    /**
     * Restriction property
     *
     * @var RestrictionType
     */
    public $Restriction;

    /**
     * ParentFolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * Traversal property
     *
     * @var FolderQueryTraversalType
     */
    public $Traversal;
}
