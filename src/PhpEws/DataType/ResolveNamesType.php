<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ResolveNamesType type
 */
class ResolveNamesType extends DataType
{
    /**
     * ParentFolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * UnresolvedEntry property
     *
     * @var NonEmptyStringType
     */
    public $UnresolvedEntry;

    /**
     * ReturnFullContactData property
     *
     * @var boolean
     */
    public $ReturnFullContactData;

    /**
     * SearchScope property
     *
     * @var ResolveNamesSearchScopeType
     */
    public $SearchScope;
}
