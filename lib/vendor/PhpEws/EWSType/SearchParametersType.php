<?php
/**
 * Definition of the SearchParametersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the SearchParametersType type
 */
class SearchParametersType extends EWSType
{
    /**
     * Restriction property
     *
     * @var EWSType_RestrictionType
     */
    public $Restriction;

    /**
     * BaseFolderIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $BaseFolderIds;

    /**
     * Traversal property
     *
     * @var EWSType_SearchFolderTraversalType
     */
    public $Traversal;
}
