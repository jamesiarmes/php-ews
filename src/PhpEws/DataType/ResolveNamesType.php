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
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * UnresolvedEntry property
     *
     * @var EWSType_NonEmptyStringType
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
     * @var EWSType_ResolveNamesSearchScopeType
     */
    public $SearchScope;
}
