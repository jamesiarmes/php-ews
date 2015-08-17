<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FindFolderType
 *
 *
 * XSD Type: FindFolderType
 *
 * @method FindFolderType getTraversal()
 * @method FindFolderType setTraversal(string $traversal)
 * @method FindFolderType getFolderShape()
 * @method FindFolderType setFolderShape(\jamesiarmes\PEWS\API\TypeTest\FolderResponseShapeType $folderShape)
 * @method FindFolderType getIndexedPageFolderView()
 * @method FindFolderType setIndexedPageFolderView(\jamesiarmes\PEWS\API\TypeTest\IndexedPageViewType $indexedPageFolderView)
 * @method FindFolderType getFractionalPageFolderView()
 * @method FindFolderType setFractionalPageFolderView(\jamesiarmes\PEWS\API\TypeTest\FractionalPageViewType $fractionalPageFolderView)
 * @method FindFolderType getRestriction()
 * @method FindFolderType setRestriction(\jamesiarmes\PEWS\API\TypeTest\RestrictionType $restriction)
 * @method FindFolderType getParentFolderIds()
 * @method FindFolderType setParentFolderIds(\jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 */
class FindFolderType extends BaseRequestType
{

    /**
     * @property string $traversal
     */
    protected $traversal = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderResponseShapeType $folderShape
     */
    protected $folderShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IndexedPageViewType
     * $indexedPageFolderView
     */
    protected $indexedPageFolderView = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FractionalPageViewType
     * $fractionalPageFolderView
     */
    protected $fractionalPageFolderView = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RestrictionType $restriction
     */
    protected $restriction = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType
     * $parentFolderIds
     */
    protected $parentFolderIds = null;


}

