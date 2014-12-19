<?php
/**
 * Contains EWSType_SearchParametersType.
 */

/**
 * Represents the parameters that define a search folder.
 *
 * @package php-ews\Types
 */
class EWSType_SearchParametersType extends EWSType
{
    /**
     * Represents the collection of folders that will be mined to determine the
     * contents of a search folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $BaseFolderIds;

    /**
     * Represents the restriction or query that is used to filter items or
     * folders in FindItem/FindFolder and search folder operations.
     *
     * @since Exchange 2007
     *
     * @var EWSType_RestrictionType
     */
    public $Restriction;

    /**
     * Describes how a search folder traverses the folder hierarchy.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TraversalType
     */
    public $Traversal;
}
