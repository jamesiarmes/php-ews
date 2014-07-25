<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the SearchParametersType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SearchParametersType type
 */
class SearchParametersType extends DataType
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
