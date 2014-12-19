<?php
/**
 * Contains EWSType_FolderChangeType.
 */

/**
 * Represents a collection of changes to be performed on a single folder.
 *
 * @package php-ews\Types
 */
class EWSType_FolderChangeType extends EWSType
{
    /**
     * Identifies MicrosoftExchange Server 2007 folders that can be referenced by
     * name.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Contains the identifier and change key of a folder to update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;

    /**
     * Defines the type of update that is performed on a folder that is
     * identified by either the FolderId or DistinguishedFolderId element.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfFolderChangeDescriptionsType
     */
    public $Updates;
}
