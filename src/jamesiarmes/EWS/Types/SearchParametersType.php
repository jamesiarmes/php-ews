<?php
/**
 * Contains SearchParametersType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the parameters that define a search folder.
 *
 * @package jamesiarmes\EWS\Types
 */
class SearchParametersType extends EWSType
{
    /**
     * Represents the collection of folders that will be mined to determine the
     * contents of a search folder.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $BaseFolderIds;

    /**
     * Represents the restriction or query that is used to filter items or
     * folders in FindItem/FindFolder and search folder operations.
     *
     * @since Exchange 2007
     *
     * @var RestrictionType
     */
    public $Restriction;

    /**
     * Describes how a search folder traverses the folder hierarchy.
     *
     * @since Exchange 2007
     *
     * @var TraversalType
     */
    public $Traversal;
}
