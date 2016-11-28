<?php
/**
 * Contains \jamesiarmes\PhpEws\Client.
 */

namespace jamesiarmes\PhpEws;

/**
 * Base class of the Exchange Web Services application.
 *
 * @package php-ews\Client
 */
class Client
{
    /**
     * Microsoft Exchange 2007
     *
     * @var string
     */
    const VERSION_2007 = 'Exchange2007';

    /**
     * Microsoft Exchange 2007 SP1
     *
     * @var string
     */
    const VERSION_2007_SP1 = 'Exchange2007_SP1';

    /**
     * Microsoft Exchange 2007 SP2
     *
     * @var string
     */
    const VERSION_2007_SP2 = 'Exchange2007_SP2';

    /**
     * Microsoft Exchange 2007 SP3
     *
     * @var string
     */
    const VERSION_2007_SP3 = 'Exchange2007_SP3';

    /**
     * Microsoft Exchange 2010
     *
     * @var string
     */
    const VERSION_2010 = 'Exchange2010';

    /**
     * Microsoft Exchange 2010 SP1
     *
     * @var string
     */
    const VERSION_2010_SP1 = 'Exchange2010_SP1';

    /**
     * Microsoft Exchange 2010 SP2
     *
     * @var string
     */
    const VERSION_2010_SP2 = 'Exchange2010_SP2';

    /**
     * Microsoft Exchange 2013.
     *
     * @var string
     */
    const VERSION_2013 = 'Exchange2013';

    /**
     * Microsoft Exchange 2013 SP1.
     *
     * @var string
     */
    const VERSION_2013_SP1 = 'Exchange2013_SP1';

    /**
     * Microsoft Exchange 2016.
     *
     * @var string
     */
    const VERSION_2016 = 'Exchange2016';

    /**
     * Password to use when connecting to the Exchange server.
     *
     * @var string
     */
    protected $password;

    /**
     * Location of the Exchange server.
     *
     * @var string
     */
    protected $server;

    /**
     * SOAP client used to make the request
     *
     * @var \jamesiarmes\PhpEws\SoapClient
     */
    protected $soap;

    /**
     * Username to use when connecting to the Exchange server.
     *
     * @var string
     */
    protected $username;

    /**
     * Exchange impersonation
     *
     * @var \jamesiarmes\PhpEws\Type\ExchangeImpersonationType
     */
    protected $impersonation;

    /**
     * Miscrosoft Exchange version that we are going to connect to
     *
     * @var string
     *
     * @see Client::VERSION_2007
     * @see Client::VERSION_2007_SP1
     * @see Client::VERSION_2007_SP2
     * @see Client::VERSION_2007_SP3
     * @see Client::VERSION_2010
     * @see Client::VERSION_2010_SP1
     * @see Client::VERSION_2010_SP2
     */
    protected $version;

    /**
     * Constructor for the ExchangeWebServices class
     *
     * @param string $server
     * @param string $username
     * @param string $password
     * @param string $version One of the Client::VERSION_* constants.
     */
    public function __construct(
        $server = null,
        $username = null,
        $password = null,
        $version = self::VERSION_2007
    ) {
        // Set the object properties.
        $this->setServer($server);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setVersion($version);
    }

    /**
     * Returns the SOAP Client that may be used to make calls against the server
     *
     * @return \jamesiarmes\PhpEws\SoapClient
     */
    public function getClient()
    {
        return $this->initializeSoapClient();
    }

    /**
     * Sets the impersonation property
     *
     * @param \jamesiarmes\PhpEws\Type\ExchangeImpersonationType $impersonation
     */
    public function setImpersonation($impersonation)
    {
        $this->impersonation = $impersonation;

        return true;
    }

    /**
     * Sets the password property
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return true;
    }

    /**
     * Sets the server property
     *
     * @param string $server
     */
    public function setServer($server)
    {
        $this->server = $server;

        return true;
    }

    /**
     * Sets the user name property
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return true;
    }

    /**
     * Sets the version property
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return true;
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\AddDelegateType $request
     * @return \jamesiarmes\PhpEws\Response\AddDelegateResponseMessageType
     */
    public function AddDelegate($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Adds a distribution group to the instant messaging (IM) list in the
     * Unified Contact Store.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\AddDistributionGroupToImListType $request
     * @return \jamesiarmes\PhpEws\Response\AddDistributionGroupToImListResponseMessageType
     */
    public function AddDistributionGroupToImList($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Adds an existing instant messaging (IM) contact to a group.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\AddImContactToGroup $request
     * @return \jamesiarmes\PhpEws\Response\AddImContactToGroupResponseMessageType
     */
    public function AddImContactToGroup($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Adds a new instant messaging (IM) group to a mailbox.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\AddImGroupType $request
     * @return \jamesiarmes\PhpEws\Response\AddImGroupResponseMessageType
     */
    public function AddImGroup($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Adds a new contact to an instant messaging (IM) group.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\AddNewImContactToGroup $request
     * @return \jamesiarmes\PhpEws\Response\AddNewImContactToGroupResponseMessageType
     */
    public function AddNewImContactToGroup($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Adds a new contact to a group based on a contact's phone number.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\AddNewTelUriContactToGroupType $request
     * @return \jamesiarmes\PhpEws\Response\AddNewTelUriContactToGroupResponse
     */
    public function AddNewTelUriContactToGroup($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Sets a one-time or follow up action on all the items in a conversation.
     *
     * This operation allows you to categorize, move, copy, delete, and set the
     * read state on all items in a conversation. Actions can also be set for
     * new messages in a conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @param \jamesiarmes\PhpEws\Request\ApplyConversationActionType $request
     * @return \jamesiarmes\PhpEws\Response\ApplyConversationActionResponseType
     */
    public function ApplyConversationAction($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Moves an item into the mailbox user's archive mailbox.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\ArchiveItemType $request
     * @return \jamesiarmes\PhpEws\Response\ArchiveItemResponse
     */
    public function ArchiveItem($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\ConvertIdType $request
     * @return \jamesiarmes\PhpEws\Response\ConvertIdResponseType
     */
    public function ConvertId($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\CopyFolderType $request
     * @return \jamesiarmes\PhpEws\Response\CopyFolderResponseType
     */
    public function CopyFolder($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\CopyItemType $request
     * @return \jamesiarmes\PhpEws\Response\CopyItemResponseType
     */
    public function CopyItem($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\CreateAttachmentType $request
     * @return \jamesiarmes\PhpEws\Response\CreateAttachmentResponseType
     */
    public function CreateAttachment($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\CreateFolderType $request
     * @return \jamesiarmes\PhpEws\Response\CreateFolderResponseType
     */
    public function CreateFolder($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Creates a folder hierarchy.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\CreateFolderPathType $request
     * @return \jamesiarmes\PhpEws\Response\CreateFolderPathResponseType
     */
    public function CreateFolderPath($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\CreateItemType $request
     * @return \jamesiarmes\PhpEws\Response\CreateItemResponseType
     */
    public function CreateItem($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\CreateManagedFolderRequestType $request
     * @return \jamesiarmes\PhpEws\Response\CreateManagedFolderResponseType
     */
    public function CreateManagedFolder($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Creates a user configuration object on a folder.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\CreateUserConfigurationType $request
     * @return \jamesiarmes\PhpEws\Response\CreateUserConfigurationResponseType
     */
    public function CreateUserConfiguration($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\DeleteAttachmentType $request
     * @return \jamesiarmes\PhpEws\Response\DeleteAttachmentResponseType
     */
    public function DeleteAttachment($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\DeleteFolderType $request
     * @return \jamesiarmes\PhpEws\Response\DeleteFolderResponseType
     */
    public function DeleteFolder($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\DeleteItemType $request
     * @return \jamesiarmes\PhpEws\Response\DeleteItemResponseType
     */
    public function DeleteItem($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Deletes a user configuration object on a folder.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\DeleteUserConfigurationType $request
     * @return \jamesiarmes\PhpEws\Response\DeleteUserConfigurationResponseType
     */
    public function DeleteUserConfiguration($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Disables a mail app for Outlook.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\DisableAppType $request
     * @return \jamesiarmes\PhpEws\Response\DisableAppResponseType
     */
    public function DisableApp($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Terminates a telephone call.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\DisconnectPhoneCallType $request
     * @return \jamesiarmes\PhpEws\Response\DisconnectPhoneCallResponseMessageType
     */
    public function DisconnectPhoneCall($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Empties folders in a mailbox.
     *
     * Optionally, this operation enables you to delete the subfolders of the
     * specified folder. When a subfolder is deleted, the subfolder and the
     * messages within the subfolder are deleted.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\EmptyFolderType $request
     * @return \jamesiarmes\PhpEws\Response\EmptyFolderResponseType
     */
    public function EmptyFolder($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\ExpandDLType $request
     * @return \jamesiarmes\PhpEws\Response\ExpandDLResponseType
     */
    public function ExpandDL($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Exports items out of a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @param \jamesiarmes\PhpEws\Request\ExportItemsType $request
     * @return \jamesiarmes\PhpEws\Response\ExportItemsResponseType
     */
    public function ExportItems($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Enumerates a list of conversations in a folder.
     *
     * @param \jamesiarmes\PhpEws\Request\FindConversationType $request
     * @return \jamesiarmes\PhpEws\Response\FindConversationResponseMessageType
     */
    public function FindConversation($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\FindFolderType $request
     * @return \jamesiarmes\PhpEws\Response\FindFolderResponseType
     */
    public function FindFolder($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\FindItemType $request
     * @return \jamesiarmes\PhpEws\Response\FindItemResponseType
     */
    public function FindItem($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Finds messages that meet the specified criteria.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\FindMessageTrackingReportRequestType $request
     * @return \jamesiarmes\PhpEws\Response\FindMessageTrackingReportResponseMessageType
     */
    public function FindMessageTrackingReport($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Returns all persona objects from a specified Contacts folder or retrieves
     * contacts that match a specified query string.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\FindPeopleType $request
     * @return \jamesiarmes\PhpEws\Response\FindPeopleResponseMessageType
     */
    public function FindPeople($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves app manifests.
     *
     * @since Exchange 2013 SP1
     *
     * @param \jamesiarmes\PhpEws\Request\GetAppManifestsType $request
     * @return \jamesiarmes\PhpEws\Response\GetAppManifestsResponseType
     */
    public function GetAppManifests($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves the URL for the app marketplace that a client can visit to
     * acquire apps to install in a mailbox.
     *
     * @since Exchange 2013 SP1
     *
     * @param \jamesiarmes\PhpEws\Request\GetAppMarketplaceUrl $request
     * @return \jamesiarmes\PhpEws\Response\GetAppMarketplaceUrlResponseMessageType
     */
    public function GetAppMarketplaceUrl($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\GetAttachmentType $request
     * @return \jamesiarmes\PhpEws\Response\GetAttachmentResponseType
     */
    public function GetAttachment($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Gets a client access token for a mail app for Outlook.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetClientAccessTokenType $request
     * @return \jamesiarmes\PhpEws\Response\GetClientAccessTokenResponseType
     */
    public function GetClientAccessToken($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves one or more sets of items that are organized in to nodes in a
     * conversation.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetConversationItemsType $request
     * @return \jamesiarmes\PhpEws\Response\GetConversationItemsResponseType
     */
    public function GetConversationItems($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\GetDelegateType $request
     * @return \jamesiarmes\PhpEws\Response\GetDelegateResponseMessageType
     */
    public function GetDelegate($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Returns configuration information for in-place holds, saved discovery
     * searches, and the mailboxes that are enabled for discovery search.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetDiscoverySearchConfigurationType $request
     * @return \jamesiarmes\PhpEws\Response\GetDiscoverySearchConfigurationResponseMessageType
     */
    public function GetDiscoverySearchConfiguration($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\GetEventsType $request
     * @return \jamesiarmes\PhpEws\Response\GetEventsResponseType
     */
    public function GetEvents($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\GetFolderType $request
     * @return \jamesiarmes\PhpEws\Response\GetFolderResponseType
     */
    public function GetFolder($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves the mailboxes that are under a specific hold and the associated
     * hold query.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetHoldOnMailboxesType $request
     * @return \jamesiarmes\PhpEws\Response\GetHoldOnMailboxesResponseMessageType
     */
    public function GetHoldOnMailboxes($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves the list of instant messaging (IM) groups and IM contact
     * personas in a mailbox.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetImItemListType $request
     * @return \jamesiarmes\PhpEws\Response\GetImItemListResponseMessageType
     */
    public function GetImItemList($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves information about instant messaging (IM) groups and IM contact
     * personas.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetImItemsType $request
     * @return \jamesiarmes\PhpEws\Response\GetImItemsResponse
     */
    public function GetImItems($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves Inbox rules in the identified user's mailbox.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\GetInboxRulesRequestType $request
     * @return \jamesiarmes\PhpEws\Response\GetInboxRulesResponseType
     */
    public function GetInboxRules($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\GetItemType $request
     * @return \jamesiarmes\PhpEws\Response\GetItemResponseType
     */
    public function GetItem($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves the mail tips information for the specified mailbox.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\GetMailTipsType $request
     * @return \jamesiarmes\PhpEws\Response\GetMailTipsResponseMessageType
     */
    public function GetMailTips($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves tracking information about the specified messages.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\GetMessageTrackingReportRequestType $request
     * @return \jamesiarmes\PhpEws\Response\GetMessageTrackingReportResponseMessageType
     */
    public function GetMessageTrackingReport($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves details about items that cannot be indexed.
     *
     * This includes, but is not limited to, the item identifier, an error code,
     * an error description, when an attempt was made to index the item, and
     * additional information about the file.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetNonIndexableItemDetailsType $request
     * @return \jamesiarmes\PhpEws\Response\GetNonIndexableItemDetailsResponseMessageType
     */
    public function GetNonIndexableItemDetails($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves the count of items that cannot be indexed in a mailbox.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetNonIndexableItemStatisticsType $request
     * @return \jamesiarmes\PhpEws\Response\GetNonIndexableItemStatisticsResponseMessageType
     */
    public function GetNonIndexableItemStatistics($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Provides the email account password expiration date for the current user.
     *
     * @since Exchange 2010 SP2
     *
     * @param \jamesiarmes\PhpEws\Request\GetPasswordExpirationDateType $request
     * @return \jamesiarmes\PhpEws\Response\GetPasswordExpirationDateResponseMessageType
     */
    public function GetPasswordExpirationDate($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves a set of properties that are associated with a persona.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetPersonaType $request
     * @return \jamesiarmes\PhpEws\Response\GetPersonaResponseMessageType
     */
    public function GetPersona($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves information about the specified telephone call.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\GetPhoneCallInformationType $request
     * @return \jamesiarmes\PhpEws\Response\GetPhoneCallInformationResponseMessageType
     */
    public function GetPhoneCallInformation($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves reminders for calendar and task items.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetRemindersType $request
     * @return \jamesiarmes\PhpEws\Response\GetRemindersResponseMessageType
     */
    public function GetReminders($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves the room lists that are available within the Exchange
     * organization.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\GetRoomListsType $request
     * @return \jamesiarmes\PhpEws\Response\GetRoomListsResponseMessageType
     */
    public function GetRoomLists($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves the rooms within the specified room list.
     *
     * @since Exchange 2010 SP1
     *
     * @param \jamesiarmes\PhpEws\Request\GetRoomsType $request
     * @return \jamesiarmes\PhpEws\Response\GetRoomsResponseMessageType
     */
    public function GetRooms($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves a scoped set of searchable mailboxes for discovery searches.
     *
     * The scope of searchable mailboxes returned in the response is determined
     * by the search filter and whether distribution group membership is
     * expanded.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetSearchableMailboxesType $request
     * @return \jamesiarmes\PhpEws\Response\GetSearchableMailboxesResponseMessageType
     */
    public function GetSearchableMailboxes($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieve the timezones supported by the server.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\GetServerTimeZonesType $request
     * @return \jamesiarmes\PhpEws\Response\GetServerTimeZonesResponseType
     */
    public function GetServerTimeZones($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves configuration information for the specified type of service.
     *
     * This operation can return configuration settings for the Unified
     * Messaging, Protection Rules, and Mail Tips services.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\GetServiceConfigurationType $request
     * @return \jamesiarmes\PhpEws\Response\GetServiceConfigurationResponseMessageType
     */
    public function GetServiceConfiguration($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves the local folder identifier of a specified shared folder.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\GetSharingFolderType $request
     * @return \jamesiarmes\PhpEws\Response\GetSharingFolderResponseMessageType
     */
    public function GetSharingFolder($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Gets an opaque authentication token that identifies a sharing invitation.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\GetSharingMetadataType $request
     * @return \jamesiarmes\PhpEws\Response\GetSharingMetadataResponseMessageType
     */
    public function GetSharingMetadata($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Requests notifications from the Client Access server.
     *
     * The GetStreamingEvents response returns an array of items and events that
     * have occurred in a mailbox since the last the notification.
     *
     * @since Exchange 2010 SP1
     *
     * @param \jamesiarmes\PhpEws\Request\GetStreamingEventsType $request
     * @return \jamesiarmes\PhpEws\Response\GetStreamingEventsResponseType
     */
    public function GetStreamingEvents($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\GetUserAvailabilityRequestType $request
     * @return \jamesiarmes\PhpEws\Response\GetUserAvailabilityResponseType
     */
    public function GetUserAvailability($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves a user configuration object from a folder.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\GetUserConfigurationType $request
     * @return \jamesiarmes\PhpEws\Response\GetUserConfigurationResponseType
     */
    public function GetUserConfiguration($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\GetUserOofSettingsRequest $request
     * @return \jamesiarmes\PhpEws\Response\GetUserOofSettingsResponse
     */
    public function GetUserOofSettings($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves a user photo from Active Directory Domain Services (AD DS).
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetUserPhotoType $request
     * @return \jamesiarmes\PhpEws\Response\GetUserPhotoResponseMessageType
     */
    public function GetUserPhoto($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Retrieves a list of all default, system folder, and personal tags that
     * are associated with a user by means of a system policy or that were
     * applied by the user.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\GetUserRetentionPolicyTagsType $request
     * @return \jamesiarmes\PhpEws\Response\GetUserRetentionPolicyTagsResponseMessageType
     */
    public function GetUserRetentionPolicyTags($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Installs a mail app for Outlook in a mailbox.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\InstallAppType $request
     * @return \jamesiarmes\PhpEws\Response\InstallAppResponseType
     */
    public function InstallApp($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Sets the IsRead property on all items, in one or more folders, to
     * indicate that all items are either read or unread.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\MarkAllItemsAsRead $request
     * @return \jamesiarmes\PhpEws\Response\MarkAllItemsAsReadResponseType
     */
    public function MarkAllItemsAsRead($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Adds and removes users from the blocked email list and moves email
     * messages to the Junk Email folder.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\MarkAsJunkType $request
     * @return \jamesiarmes\PhpEws\Response\MarkAsJunkResponseType
     */
    public function MarkAsJunk($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\MoveFolderType $request
     * @return \jamesiarmes\PhpEws\Response\MoveFolderResponseType
     */
    public function MoveFolder($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\MoveItemType $request
     * @return \jamesiarmes\PhpEws\Response\MoveItemResponseType
     */
    public function MoveItem($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Initiates a dismiss or snooze action on a reminder.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\PerformReminderActionType $request
     * @return \jamesiarmes\PhpEws\Response\PerformReminderActionResponseMessageType
     */
    public function PerformReminderAction($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Initiates an outbound call and plays a message over the telephone.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\PlayOnPhoneType $request
     * @return \jamesiarmes\PhpEws\Response\PlayOnPhoneResponseMessageType
     */
    public function PlayOnPhone($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Refreshes the specified local folder with the latest data from the folder
     * that is being shared.
     *
     * @since Exchange 2010
     *
     * @param \jamesiarmes\PhpEws\Request\RefreshSharingFolderType $request
     * @return \jamesiarmes\PhpEws\Response\RefreshSharingFolderResponseMessageType
     */
    public function RefreshSharingFolder($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Removes contacts from the Lync instant messaging (IM) list when Lync uses
     * Exchange for the contact store.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\RemoveContactFromImListType $request
     * @return \jamesiarmes\PhpEws\Response\RemoveContactFromImListResponseMessageType
     */
    public function RemoveContactFromImList($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\RemoveDelegateType $request
     * @return \jamesiarmes\PhpEws\Response\RemoveDelegateResponseMessageType
     */
    public function RemoveDelegate($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Removes a distribution group from the Lync instant messaging (IM) list
     * when Lync uses Exchange for the contact store.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\RemoveDistributionGroupFromImListType $request
     * @return \jamesiarmes\PhpEws\Response\RemoveDistributionGroupFromImListResponseMessageType
     */
    public function RemoveDistributionGroupFromImList($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Removes a single IM contact from an IM group.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\RemoveImContactFromGroupType $request
     * @return \jamesiarmes\PhpEws\Response\RemoveImContactFromGroupResponseMessageType
     */
    public function RemoveImContactFromGroup($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Removes a single instant messaging (IM) group from a mailbox.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\RemoveImGroupType $request
     * @return \jamesiarmes\PhpEws\Response\RemoveImGroupResponseMessageType
     */
    public function RemoveImGroup($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\ResolveNamesType $request
     * @return \jamesiarmes\PhpEws\Response\ResolveNamesResponseType
     */
    public function ResolveNames($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Searches mailboxes for occurrences of terms in mailbox items.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\SearchMailboxesType $request
     * @return \jamesiarmes\PhpEws\Response\SearchMailboxesResponseType
     */
    public function SearchMailboxes($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\SendItemType $request
     * @return \jamesiarmes\PhpEws\Response\SendItemResponseType
     */
    public function SendItem($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Sets a mailbox hold policy on mailboxes.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\SetHoldOnMailboxesType $request
     * @return \jamesiarmes\PhpEws\Response\SetHoldOnMailboxesResponseMessageType
     */
    public function SetHoldOnMailboxes($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Changes the display name of an instant messaging (IM) group.
     *
     * @since Exchange 2013
     *
     * @param \jamesiarmes\PhpEws\Request\SetImGroupType $request
     * @return \jamesiarmes\PhpEws\Response\SetImGroupResponseMessageType
     */
    public function SetImGroup($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\SetUserOofSettingsRequest $request
     * @return \jamesiarmes\PhpEws\Response\SetUserOofSettingsResponse
     */
    public function SetUserOofSettings($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\SubscribeType $request
     * @return \jamesiarmes\PhpEws\Response\SubscribeResponseType
     */
    public function Subscribe($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\SyncFolderHierarchyType $request
     * @return \jamesiarmes\PhpEws\Response\SyncFolderHierarchyResponseType
     */
    public function SyncFolderHierarchy($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\SyncFolderItemsType $request
     * @return \jamesiarmes\PhpEws\Response\SyncFolderItemsResponseType
     */
    public function SyncFolderItems($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\UnsubscribeType $request
     * @return \jamesiarmes\PhpEws\Response\UnsubscribeResponseType
     */
    public function Unsubscribe($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\UpdateDelegateType $request
     * @return \jamesiarmes\PhpEws\Response\UpdateDelegateResponseMessageType
     */
    public function UpdateDelegate($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\UpdateFolderType $request
     * @return \jamesiarmes\PhpEws\Response\UpdateFolderResponseType
     */
    public function UpdateFolder($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Function Description
     *
     * @param \jamesiarmes\PhpEws\Request\UpdateItemType $request
     * @return \jamesiarmes\PhpEws\Response\UpdateItemResponseType
     */
    public function UpdateItem($request)
    {
        return $this->makeRequest(__FUNCTION__, $request);
    }

    /**
     * Initializes the SoapClient object to make a request
     *
     * @return \jamesiarmes\PhpEws\SoapClient
     *
     * TODO: Build a class map that we can pass to the client.
     */
    protected function initializeSoapClient()
    {
        $this->soap = new SoapClient(
            dirname(__FILE__) . '/assets/services.wsdl',
            array(
                'user' => $this->username,
                'password' => $this->password,
                'version' => $this->version,
                'location' => 'https://' . $this->server . '/EWS/Exchange.asmx',
                'impersonation' => $this->impersonation,
            )
        );

        return $this->soap;
    }

    /**
     * Makes the SOAP call for a request.
     *
     * @param string $operation
     *   The operation to be called.
     * @param \jamesiarmes\PhpEws\Request $request
     *   The request object for the operation.
     * @return \jamesiarmes\PhpEws\Response
     *   The response object for the operation.
     */
    protected function makeRequest($operation, $request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{$operation}($request);

        return $this->processResponse($response);
    }

    /**
     * Process a response to verify that it succeeded and take the appropriate
     * action
     *
     * @throws \Exception
     *
     * @param \stdClass $response
     * @return \stdClass
     */
    protected function processResponse($response)
    {
        // If the soap call failed then we need to throw an exception.
        $code = $this->soap->getResponseCode();
        if ($code != 200) {
            throw new \Exception(
                "SOAP client returned status of $code.",
                $code
            );
        }

        return $response;
    }
}
