<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindConversationType
 *
 *
 * XSD Type: FindConversationType
 *
 * @method FindConversationType getIndexedPageItemView()
 * @method FindConversationType setIndexedPageItemView(\jamesiarmes\PEWS\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method FindConversationType getSortOrder()
 * @method FindConversationType setSortOrder(array $sortOrder)
 * @method FindConversationType getParentFolderId()
 * @method FindConversationType setParentFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $parentFolderId)
 */
class FindConversationType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\IndexedPageViewType $indexedPageItemView
     */
    protected $indexedPageItemView = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\FieldOrderType[] $sortOrder
     */
    protected $sortOrder = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TargetFolderIdType $parentFolderId
     */
    protected $parentFolderId = null;


}

