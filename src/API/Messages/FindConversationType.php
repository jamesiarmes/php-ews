<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FindConversationType
 *
 *
 * XSD Type: FindConversationType
 *
 * @method FindConversationType getIndexedPageItemView()
 * @method FindConversationType setIndexedPageItemView(\jamesiarmes\PEWS\API\TypeTest\IndexedPageViewType $indexedPageItemView)
 * @method FindConversationType getSortOrder()
 * @method FindConversationType setSortOrder(array $sortOrder)
 * @method FindConversationType getParentFolderId()
 * @method FindConversationType setParentFolderId(\jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $parentFolderId)
 */
class FindConversationType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IndexedPageViewType
     * $indexedPageItemView
     */
    protected $indexedPageItemView = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FieldOrderType[] $sortOrder
     */
    protected $sortOrder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $parentFolderId
     */
    protected $parentFolderId = null;


}

