<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindConversationType
 *
 *
 * XSD Type: FindConversationType
 *
 * @method \jamesiarmes\PEWS\API\Type\IndexedPageViewType getIndexedPageItemView()
 * @method FindConversationType setIndexedPageItemView(\jamesiarmes\PEWS\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method FindConversationType addSortOrder(\jamesiarmes\PEWS\API\Type\FieldOrderType $sortOrder)
 * @method \jamesiarmes\PEWS\API\Type\FieldOrderType[] getSortOrder()
 * @method FindConversationType setSortOrder(array $sortOrder)
 * @method \jamesiarmes\PEWS\API\Type\TargetFolderIdType getParentFolderId()
 * @method FindConversationType setParentFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $parentFolderId)
 */
class FindConversationType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\IndexedPageViewType
     */
    protected $indexedPageItemView = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FieldOrderType[]
     */
    protected $sortOrder = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $parentFolderId = null;
}
