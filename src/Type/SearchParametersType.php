<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SearchParametersType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the parameters that define a search folder.
 *
 * @package php-ews\Type
 */
class SearchParametersType extends Type
{
    /**
     * Represents the collection of folders that will be mined to determine the
     * contents of a search folder.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType
     */
    public $BaseFolderIds;

    /**
     * Represents the restriction or query that is used to filter items or
     * folders in FindItem/FindFolder and search folder operations.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\RestrictionType
     */
    public $Restriction;

    /**
     * Describes how a search folder traverses the folder hierarchy.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\SearchFolderTraversalType
     */
    public $Traversal;
}
