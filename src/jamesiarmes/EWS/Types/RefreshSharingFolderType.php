<?php
/**
 * Contains RefreshSharingFolderType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to refresh the specified local folder.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class RefreshSharingFolderType extends EWSType
{
    /**
     * Represents the identifier of the local folder in a sharing relationship.
     *
     * @since Exchange 2010
     *
     * @var FolderIdType
     */
    public $SharingFolderId;
}
