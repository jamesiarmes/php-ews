<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindFolderType
 *
 *
 * XSD Type: FindFolderType
 *
 * @method string getTraversal()
 * @method FindFolderType setTraversal(string $traversal)
 * @method \jamesiarmes\PEWS\API\Type\FolderResponseShapeType getFolderShape()
 * @method FindFolderType setFolderShape(\jamesiarmes\PEWS\API\Type\FolderResponseShapeType $folderShape)
 * @method \jamesiarmes\PEWS\API\Type\IndexedPageViewType getIndexedPageFolderView()
 * @method FindFolderType setIndexedPageFolderView(\jamesiarmes\PEWS\API\Type\IndexedPageViewType $indexedPageFolderView)
 * @method \jamesiarmes\PEWS\API\Type\FractionalPageViewType getFractionalPageFolderView()
 * @method FindFolderType setFractionalPageFolderView(\jamesiarmes\PEWS\API\Type\FractionalPageViewType $fractionalPageFolderView)
 * @method \jamesiarmes\PEWS\API\Type\RestrictionType getRestriction()
 * @method FindFolderType setRestriction(\jamesiarmes\PEWS\API\Type\RestrictionType $restriction)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType getParentFolderIds()
 * @method FindFolderType setParentFolderIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 */
class FindFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IndexedPageViewType
     */
    protected $indexedPageFolderView = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FractionalPageViewType
     */
    protected $fractionalPageFolderView = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $parentFolderIds = null;
}
