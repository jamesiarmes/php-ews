<?php
/**
 * Contains EWSType_EmptyFolderType.
 */

/**
 * Defines a request to empty a folder in a mailbox in the Exchange store.
 *
 * Optionally, subfolders can also be deleted when the folder is emptied.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_EmptyFolderType extends EWSType
{
    /**
     * Specifies whether subfolders are to be deleted.
     *
     * This attribute is required.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $DeleteSubFolders;

    /**
     * Specifies how a folder is emptied.
     *
     * This attribute is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_DisposalType
     */
    public $DeleteType;
}
