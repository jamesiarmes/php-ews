<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SearchParametersType type
 */
class SearchParametersType extends DataType
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
