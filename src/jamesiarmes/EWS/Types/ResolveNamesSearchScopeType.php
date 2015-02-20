<?php
/**
 * Contains ResolveNamesSearchScopeType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the order and scope for a ResolveNames search.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class ResolveNamesSearchScopeType extends EWSType
{
    /**
     * Only the Active Directory directory service is searched.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ACTIVE_DIRECTORY = 'ActiveDirectory';

    /**
     * Active Directory is searched first, and then the contact folders that are
     * specified in the ParentFolderIds property are searched.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ACTIVE_DIRECTORY_CONTACTS = 'ActiveDirectoryContacts';

    /**
     * Only the contact folders that are identified by the ParentFolderIds
     * property are searched.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS = 'Contacts';

    /**
     * Contact folders that are identified by the ParentFolderIds property are
     * searched first and then Active Directory is searched.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_ACTIVE_DIRECTORY = 'ContactsActiveDirectory';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
