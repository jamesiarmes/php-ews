<?php
/**
 * Definition of the ResolveNamesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the ResolveNamesType type
 */
class ResolveNamesType extends EWSType
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
