<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing SearchFolderType
 *
 *
 * XSD Type: SearchFolderType
 *
 * @method SearchParametersType getSearchParameters()
 * @method SearchFolderType setSearchParameters(SearchParametersType $searchParameters)
 */
class SearchFolderType extends FolderType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\SearchParametersType
     */
    protected $searchParameters = null;
}
