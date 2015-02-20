<?php
/**
 * Contains GetFolderType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to get a folder from a mailbox in the Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class GetFolderType extends EWSType
{
    /**
     * Contains an array of folder identifiers that are used to identify folders
     * to get from a mailbox in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Identifies the properties to get for each folder identified in the
     * FolderIds element.
     *
     * @since Exchange 2007
     *
     * @var FolderResponseShapeType
     */
    public $FolderShape;
}
