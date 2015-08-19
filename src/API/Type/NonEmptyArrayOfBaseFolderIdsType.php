<?php
/**
 * Contains EWSType_NonEmptyArrayOfBaseFolderIdsType.
 */
/**
 * Represents the collection of folders that will be mined to determine the
 * contents of a search folder.
 *
 * @package php-ews\Types
 */

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

class NonEmptyArrayOfBaseFolderIdsType extends Type
{
    /**
     * Identifies MicrosoftExchange Server 2007 folders that can be referenced
     * by name.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;
    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;
}
