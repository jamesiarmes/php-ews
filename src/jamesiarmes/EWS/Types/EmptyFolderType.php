<?php
/**
 * Contains EmptyFolderType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to empty a folder in a mailbox in the Exchange store.
 *
 * Optionally, subfolders can also be deleted when the folder is emptied.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class EmptyFolderType extends EWSType
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
     * @var DisposalType
     */
    public $DeleteType;
}
