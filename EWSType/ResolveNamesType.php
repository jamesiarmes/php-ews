<?php
/**
 * Contains EWSType_ResolveNamesType.
 */

/**
 * Defines a request to resolve ambiguous names.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_ResolveNamesType extends EWSType
{
    /**
     * Identifies the property set returned for contacts.
     *
     * @since Exchange 2010 SP2
     *
     * @var EWSType_DefaultShapeNamesType
     */
    public $ContactDataShape;

    /**
     * Contains an array of contact folder identifiers that would be searched if
     * the SearchScope attribute is set to ActiveDirectoryContacts, Contacts, or
     * ContactsActiveDirectory.
     *
     * The ParentFolderIds array can only contain a single contact folder
     * identifier. If the ParentFolderIds element is not present, the default
     * Contacts folder is searched.
     *
     * The folder identifier can be used for delegate access.
     *
     * Active Directory searches are performed by using access control lists
     * (ACLs). Some users might not have the rights to see some Active Directory
     * objects.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * Describes whether the full contact details for public contacts for a
     * resolved name are returned in the response.
     *
     * This attribute is required for public contacts. This value does not
     * affect private contacts and private distribution lists, for which ItemId
     * is always returned.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $ReturnFullContactData;

    /**
     * Identifies the order and scope for a ResolveNames search.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResolveNamesSearchScopeType
     */
    public $SearchScope;

    /**
     * Contains the name of a contact or distribution list to resolve.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $UnresolvedEntry;
}
