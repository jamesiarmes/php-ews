<?php
/**
 * Contains EWSType_NonEmptyArrayOfBaseFolderIdsType.
 */

/**
 * Represents the collection of folders that will be mined to determine the
 * contents of a search folder.
 *
 * @package php-ews\Type
 */
class EWSType_NonEmptyArrayOfBaseFolderIdsType extends EWSType
{
    /**
     * Identifies MicrosoftExchange Server 2007 folders that can be referenced
     * by name.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderIdType
     */
    public $FolderId;
}
