<?php
/**
 * Definition of the ResolveNamesType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ResolveNamesType type
 */
class ResolveNamesType extends PhpEws\EWSType
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
