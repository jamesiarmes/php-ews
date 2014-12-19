<?php
/**
 * Contains EWSType_GetFolderType.
 */

/**
 * Defines a request to get a folder from a mailbox in the Exchange store.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetFolderType extends EWSType
{
    /**
     * Contains an array of folder identifiers that are used to identify folders
     * to get from a mailbox in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Identifies the properties to get for each folder identified in the
     * FolderIds element.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderResponseShapeType
     */
    public $FolderShape;
}
