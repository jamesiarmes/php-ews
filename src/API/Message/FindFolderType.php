<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindFolderType
 *
 *
 * XSD Type: FindFolderType
 *
 * @method FindFolderType getTraversal()
 * @method FindFolderType setTraversal(string $traversal)
 * @method FindFolderType getFolderShape()
 * @method FindFolderType setFolderShape(\jamesiarmes\PEWS\API\Type\FolderResponseShapeType $folderShape)
 * @method FindFolderType getIndexedPageFolderView()
 * @method FindFolderType setIndexedPageFolderView(\jamesiarmes\PEWS\API\Type\IndexedPageViewType $indexedPageFolderView)
 * @method FindFolderType getFractionalPageFolderView()
 * @method FindFolderType setFractionalPageFolderView(\jamesiarmes\PEWS\API\Type\FractionalPageViewType $fractionalPageFolderView)
 * @method FindFolderType getRestriction()
 * @method FindFolderType setRestriction(\jamesiarmes\PEWS\API\Type\RestrictionType $restriction)
 * @method FindFolderType getParentFolderIds()
 * @method FindFolderType setParentFolderIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 */
class FindFolderType extends BaseRequestType
{

    /**
     * @property string $traversal
     */
    protected $traversal = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\FolderResponseShapeType $folderShape
     */
    protected $folderShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IndexedPageViewType $indexedPageFolderView
     */
    protected $indexedPageFolderView = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\FractionalPageViewType
     * $fractionalPageFolderView
     */
    protected $fractionalPageFolderView = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RestrictionType $restriction
     */
    protected $restriction = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType
     * $parentFolderIds
     */
    protected $parentFolderIds = null;
}
