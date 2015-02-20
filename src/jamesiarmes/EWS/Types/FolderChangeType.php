<?php
/**
 * Contains FolderChangeType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of changes to be performed on a single folder.
 *
 * @package jamesiarmes\EWS\Types
 */
class FolderChangeType extends EWSType
{
    /**
     * Identifies MicrosoftExchange Server 2007 folders that can be referenced by
     * name.
     *
     * @since Exchange 2007
     *
     * @var DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Contains the identifier and change key of a folder to update.
     *
     * @since Exchange 2007
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * Defines the type of update that is performed on a folder that is
     * identified by either the FolderId or DistinguishedFolderId element.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfFolderChangeDescriptionsType
     */
    public $Updates;
}
