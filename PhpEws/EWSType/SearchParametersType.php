<?php
/**
 * Definition of the SearchParametersType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SearchParametersType type
 */
class SearchParametersType extends PhpEws\EWSType
{
    /**
     * Restriction property
     *
     * @var RestrictionType
     */
    public $Restriction;

    /**
     * BaseFolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $BaseFolderIds;

    /**
     * Traversal property
     *
     * @var SearchFolderTraversalType
     */
    public $Traversal;
}
