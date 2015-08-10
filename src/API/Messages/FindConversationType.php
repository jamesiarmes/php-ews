<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FindConversationType
 *
 *
 * XSD Type: FindConversationType
 *
 * @method FindConversationType getIndexedPageItemView()
 * @method FindConversationType setIndexedPageItemView($indexedPageItemView)
 * @method FindConversationType getSortOrder()
 * @method FindConversationType setSortOrder($sortOrder)
 * @method FindConversationType getParentFolderId()
 * @method FindConversationType setParentFolderId($parentFolderId)
 */
class FindConversationType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IndexedPageViewType
     * $indexedPageItemView
     */
    protected $indexedPageItemView = null;

    /**
     * @property array $sortOrder
     */
    protected $sortOrder = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $parentFolderId
     */
    protected $parentFolderId = null;


}

