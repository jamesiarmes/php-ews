<?php
/**
 * Contains NonEmptyArrayOfBaseFolderIdsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the collection of folders that will be mined to determine the
 * contents of a search folder.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfBaseFolderIdsType extends EWSType
{
    /**
     * Identifies MicrosoftExchange Server 2007 folders that can be referenced
     * by name.
     *
     * @since Exchange 2007
     *
     * @var DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2007
     *
     * @var FolderIdType
     */
    public $FolderId;
}
