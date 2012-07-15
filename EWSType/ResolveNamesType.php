<?php
/**
 * Definition of the ResolveNamesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ResolveNamesType type
 */
class EWSType_ResolveNamesType extends EWSType
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ParentFolderIds',
                'required' => false,
                'type' => 'NonEmptyArrayOfBaseFolderIdsType',
            ),
            array(
                'name' => 'UnresolvedEntry',
                'required' => false,
                'type' => 'NonEmptyStringType',
            ),
            array(
                'name' => 'ReturnFullContactData',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'SearchScope',
                'required' => false,
                'type' => 'ResolveNamesSearchScopeType',
            ),
        );
    }
}
