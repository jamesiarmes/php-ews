<?php
/**
 * Contains ExchangeWebServices.
 */

/**
 * Base class of the Exchange Web Services application.
 *
 * @package php-ews\Client
 */
class ExchangeWebServices
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
     * @var NTLMSoapClient_Exchange
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
     * @var EWSType_ExchangeImpersonationType
     */
    protected $impersonation;

    /**
     * Miscrosoft Exchange version that we are going to connect to
     *
     * @var string
     *
     * @see ExchangeWebServices::VERSION_2007
     * @see ExchangeWebServices::VERSION_2007_SP1
     * @see ExchangeWebServices::VERSION_2010
     * @see ExchangeWebServices::VERSION_2010_SP1
     */
    protected $version;

    /**
     * Constructor for the ExchangeWebServices class
     *
     * @param string $server
     * @param string $username
     * @param string $password
     * @param string $version one of the ExchangeWebServices::VERSION_* constants
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
     * @return NTLMSoapClient_Exchange
     */
    public function getClient()
    {
        return $this->initializeSoapClient();
    }

    /**
     * Sets the impersonation property.
     *
     * @param EWSType_ExchangeImpersonationType $impersonation
     */
    public function setImpersonation($impersonation)
    {
        $this->impersonation = $impersonation;

        return true;
    }

    /**
     * Sets the password property.
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return true;
    }

    /**
     * Sets the server property.
     *
     * @param string $server
     */
    public function setServer($server)
    {
        $this->server = $server;

        return true;
    }

    /**
     * Sets the user name property.
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return true;
    }

    /**
     * Sets the version property.
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return true;
    }

    /**
     * Adds one or more delegates to a principal's mailbox and sets specific
     * access permissions.
     *
     * @since Exchange 2007 SP1
     *
     * @param EWSTYpe_AddDelegateType $request
     * @return EWSType_AddDelegateResponseMessageType
     */
    public function AddDelegate($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
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
     * @param EWSType_ApplyConversationActionType $request
     * @return EWSType_ApplyConversationActionResponseType
     */
    public function ApplyConversationAction($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Converts item and folder identifiers between formats that are accepted by
     * Microsoft Exchange Server.
     *
     * @since Exchange 2007 SP1
     *
     * @param EWSType_ConvertIdType $request
     * @return EWSType_ConvertIdResponseType
     */
    public function ConvertId($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Copies folders in a mailbox.
     *
     * @since Exchange 2007
     *
     * @param EWSType_CopyFolderType $request
     * @return EWSType_CopyFolderResponseType
     */
    public function CopyFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Copies items and puts the items in a different folder.
     *
     * @since Exchange 2007
     *
     * @param EWSType_CopyItemType $request
     * @return EWSType_CopyItemResponseType
     */
    public function CopyItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Creates either an item or file attachment and attaches it to the
     * specified item.
     *
     * @since Exchange 2007
     *
     * @param EWSType_CreateAttachmentType $request
     * @return EWSType_CreateAttachmentResponseType
     */
    public function CreateAttachment($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Creates folders, calendar folders, contacts folders, tasks folders, and
     * search folders.
     *
     * @since Exchange 2007
     *
     * @param EWSType_CreateFolderType $request
     * @return EWSType_CreateFolderResponseType
     */
    public function CreateFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Creates items in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @param EWSType_CreateItemType $request
     * @return EWSType_CreateItemResponseType
     */
    public function CreateItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Creates a user configuration object on a folder.
     *
     * @since Exchange 2010
     *
     * @param EWSType_CreateUserConfigurationType $request
     * @return EWSType_CreateUserConfigurationResponseType
     */
    public function CreateUserConfiguration($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Creates a managed folder in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @param EWSType_CreateManagedFolderRequestType $request
     * @return EWSType_CreateManagedFolderResponseType
     */
    public function CreateManagedFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Deletes file and item attachments from an existing item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @param EWSType_DeleteAttachmentType $request
     * @return EWSType_DeleteAttachmentResponseType
     */
    public function DeleteAttachment($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Deletes folders from a mailbox.
     *
     * @since Exchange 2007
     *
     * @param EWSType_DeleteFolderType $request
     * @return EWSType_DeleteFolderResponseType
     */
    public function DeleteFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Deletes items in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @param EWSType_DeleteItemType $request
     * @return EWSType_DeleteItemResponseType
     */
    public function DeleteItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Deletes a user configuration object on a folder.
     *
     * @since Exchange 2010
     *
     * @param EWSType_DeleteUserConfigurationType $request
     * @return EWSType_DeleteUserConfigurationResponseType
     */
    public function DeleteUserConfiguration($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Terminates the telephone call.
     *
     * @since Exchange 2010
     *
     * @param EWSType_DisconnectPhoneCallType $request
     * @return EWSType_DisconnectPhoneCallResponseMessageType
     */
    public function DisconnectPhoneCall($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
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
     * @param EWSType_EmptyFolderType $request
     * @return EWSType_EmptyFolderResponseType
     */
    public function EmptyFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Exposes the full membership of distribution lists.
     *
     * @since Exchange 2007
     *
     * @param EWSType_ExpandDLType $request
     * @return EWSType_ExpandDLResponseType
     */
    public function ExpandDL($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Exports items out of a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @param EWSType_ExportItemsType $request
     * @return EWSType_ExportItemsResponseType
     */
    public function ExportItems($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Enumerates a list of conversations in a folder.
     *
     * @since Exchange 2010 SP1
     *
     * @param EWSType_FindConversationType $request
     * @return EWSType_FindConversationResponseMessageType
     */
    public function FindConversation($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Uses Exchange Web Services to find subfolders of an identified folder and
     * returns a set of properties that describe the set of subfolders.
     *
     * @since Exchange 2007
     *
     * @param EWSType_FindFolderType $request
     * @return EWSType_FindFolderResponseType
     */
    public function FindFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Identifies items that are located in a specified folder.
     *
     * @since Exchange 2007
     *
     * @param EWSType_FindItemType $request
     * @return EWSType_FindItemResponseType
     */
    public function FindItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Finds messages that meet the specified criteria.
     *
     * @since Exchange 2010
     *
     * @param EWSType_FindMessageTrackingReportRequestType $request
     * @return EWSType_FindMessageTrackingReportResponseMessageType
     */
    public function FindMessageTrackingReport($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Retrieves existing attachments on items in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @param EWSType_GetAttachmentType $request
     * @return EWSType_GetAttachmentResponseType
     */
    public function GetAttachment($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Retrieves the delegate settings for a specified mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @param EWSType_GetDelegateType $request
     * @return EWSType_GetDelegateResponseMessageType
     */
    public function GetDelegate($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Pulls subscription clients to request notifications from the Client
     * Access server.
     *
     * @since Exchange 2007
     *
     * @param EWSType_GetEventsType $request
     * @return EWSType_GetEventsResponseType
     */
    public function GetEvents($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Gets folders from the Exchange store.
     *
     * @since Exchange 2007
     *
     * @param EWSType_GetFolderType $request
     * @return EWSType_GetFolderResponseType
     */
    public function GetFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Retrieve Inbox rules in the identified user's mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @param EWSType_GetInboxRulesRequestType $request
     * @return EWSType_GetInboxRulesResponseType
     */
    public function GetInboxRules($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Gets items from the Exchange store.
     *
     * @since Exchange 2007
     *
     * @param EWSType_GetItemType $request
     * @return EWSType_GetItemResponseType
     */
    public function GetItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Gets the mail tips information for the specified mailbox.
     *
     * @since Exchange 2010
     *
     * @param EWSType_GetMailTipsType $request
     * @return EWSType_GetMailTipsResponseMessageType
     */
    public function GetMailTips($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Gets tracking information about the specified messages.
     *
     * @since Exchange 2010
     *
     * @param EWSType_GetMessageTrackingReportRequestType $request
     * @return EWSType_GetMessageTrackingReportResponseMessageType
     */
    public function GetMessageTrackingReport($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Retrieve the timezones supported by the server.
     *
     * @since Exchange 2010 SP1
     *
     * @param EWSType_GetPasswordExpirationDateType $request
     * @return EWSType_GetPasswordExpirationDateResponseMessageType
     */
    public function GetPasswordExpirationDate($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Returns information about the specified telephone call.
     *
     * @since Exchange 2010
     *
     * @param EWSType_GetPhoneCallInformationType $request
     * @return EWSType_GetPhoneCallInformationResponseMessageType
     */
    public function GetPhoneCallInformation($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Gets the room lists that are available within the Exchange organization.
     *
     * @since Exchange 2010 SP1
     *
     * @param EWSType_GetRoomListsType $request
     * @return EWSType_GetRoomListsResponseMessageType
     */
    public function GetRoomLists($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Gets the rooms within the specified room list.
     *
     * @since Exchange 2010 SP1
     *
     * @param EWSType_GetRoomsType $request
     * @return EWSType_GetRoomsResponseMessageType
     */
    public function GetRooms($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Returns information from time zone definitions that are available on an
     * Exchange server.
     *
     * @since Exchange 2010
     *
     * @param EWSType_GetServerTimeZonesType $request
     * @return EWSType_GetServerTimeZonesResponseType
     */
    public function GetServerTimeZones($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Gets configuration information for the specified type of service.
     *
     * @since Exchange 2010
     *
     * @param EWSType_GetServiceConfigurationType $request
     * @return EWSType_GetServiceConfigurationResponseMessageType
     */
    public function GetServiceConfiguration($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Gets the local folder identifier of a specified shared folder.
     *
     * @since Exchange 2010
     *
     * @param EWSType_GetSharingFolderType $request
     * @return EWSType_GetSharingFolderResponseMessageType
     */
    public function GetSharingFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Gets an opaque authentication token that identifies a sharing invitation.
     *
     * @since Exchange 2010
     *
     * @param EWSType_GetSharingMetadataType $request
     * @return EWSType_GetSharingMetadataResponseMessageType
     */
    public function GetSharingMetadata($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Request subscription notifications from the Client Access server.
     *
     * @since Exchange 2010 SP1
     *
     * @param EWSType_GetStreamingEventsType $request
     * @return EWSType_GetStreamingEventsResponseType
     */
    public function GetStreamingEvents($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Provides detailed information about the availability of a set of users,
     * rooms, and resources within a specified time period.
     *
     * @since Exchange 2007
     *
     * @param EWSType_GetUserAvailabilityRequestType $request
     * @return EWSType_GetUserAvailabilityResponseType
     */
    public function GetUserAvailability($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Gets a user configuration object from a folder.
     *
     * @since Exchange 2010
     *
     * @param EWSType_GetUserConfigurationType $request
     * @return EWSType_GetUserConfigurationResponseType
     */
    public function GetUserConfiguration($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Gets a mailbox user's Out of Office (OOF) settings and messages.
     *
     * @since Exchange 2007
     *
     * @param EWSType_GetUserOofSettingsRequest $request
     * @return EWSType_GetUserOofSettingsResponse
     */
    public function GetUserOofSettings($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Moves folders from a specified folder and puts them in another folder.
     *
     * @since Exchange 2007
     *
     * @param EWSType_MoveFolderType $request
     * @return EWSType_MoveFolderResponseType
     */
    public function MoveFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Moves one or more items to a single destination folder.
     *
     * @since Exchange 2007
     *
     * @param EWSType_MoveItemType $request
     * @return EWSType_MoveItemResponseType
     */
    public function MoveItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Initiates an outbound call and plays a message over the telephone.
     *
     * @since Exchange 2010
     *
     * @param EWSType_PlayOnPhoneType $request
     * @return EWSType_PlayOnPhoneResponseMessageType
     */
    public function PlayOnPhone($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Refreshes the specified local folder with the latest data from the folder
     * that is being shared.
     *
     * @since Exchange 2010
     *
     * @param EWSType_RefreshSharingFolderType $request
     * @return EWSType_RefreshSharingFolderResponseMessageType
     */
    public function RefreshSharingFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Removes one or more delegates from a user's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @param EWSType_RemoveDelegateType $request
     * @return EWSType_RemoveDelegateResponseMessageType
     */
    public function RemoveDelegate($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Resolves ambiguous email addresses and display names.
     *
     * @since Exchange 2007
     *
     * @param EWSType_ResolveNamesType $request
     * @return EWSType_ResolveNamesResponseType
     */
    public function ResolveNames($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Sends e-mail messages that are located in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @param EWSType_SendItemType $request
     * @return EWSType_SendItemResponseType
     */
    public function SendItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Sets a mailbox user's Out of Office (OOF) settings and message.
     *
     * @since Exchange 2007
     *
     * @param EWSType_SetUserOofSettingsRequest $request
     * @return EWSType_SetUserOofSettingsResponse
     */
    public function SetUserOofSettings($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Subscribes to either push or pull notifications.
     *
     * @since Exchange 2007
     *
     * @param EWSType_SubscribeType $request
     * @return EWSType_SubscribeResponseType
     */
    public function Subscribe($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Synchronizes folders between the computer that is running Microsoft
     * Exchange Server and the client.
     *
     * @since Exchange 2007
     *
     * @param EWSType_SyncFolderHierarchyType $request
     * @return EWSType_SyncFolderHierarchyResponseType
     */
    public function SyncFolderHierarchy($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Synchronizes items between the Exchange server and the client.
     *
     * @since Exchange 2007
     *
     * @param EWSType_SyncFolderItemsType $request
     * @return EWSType_SyncFolderItemsResponseType
     */
    public function SyncFolderItems($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Ends a pull notification subscription.
     *
     * Use this operation rather than letting a subscription timeout.
     *
     * This operation is only valid for pull notifications.
     *
     * @since Exchange 2007
     *
     * @param EWSType_UnsubscribeType $request
     * @return EWSType_UnsubscribeResponseType
     */
    public function Unsubscribe($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Updates delegate permissions on a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @param EWSType_UpdateDelegateType $request
     * @return EWSType_UpdateDelegateResponseMessageType
     */
    public function UpdateDelegate($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Modifies properties of an existing item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @param EWSType_UpdateFolderType $request
     * @return EWSType_UpdateFolderResponseType
     */
    public function UpdateFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Updates the authenticated user's Inbox rules by applying the specified
     * operations.
     *
     * @since Exchange 2010 SP1
     *
     * @param EWSType_UpdateInboxRulesRequestType $request
     * @return EWSType_UpdateInboxRulesResponseType
     */
    public function UpdateInboxRules($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Modifies the properties of an existing item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @param EWSType_UpdateItemType $request
     * @return EWSType_UpdateItemResponseType
     */
    public function UpdateItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Updates a user configuration object on a folder.
     *
     * @since Exchange 2010
     *
     * @param EWSType_UpdateUserConfigurationType $request
     * @return EWSType_UpdateUserConfigurationResponseType
     */
    public function UpdateUserConfiguration($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Uploads a stream of items into an Exchange mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @param EWSType_UploadItemsType $request
     * @return EWSType_UploadItemsResponseType
     */
    public function UploadItems($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Initializes the SoapClient object to make a request
     *
     * @return NTLMSoapClient_Exchange
     */
    protected function initializeSoapClient()
    {
        $this->soap = new NTLMSoapClient_Exchange(
            dirname(__FILE__).'/wsdl/services.wsdl',
            array(
                'user' => $this->username,
                'password' => $this->password,
                'version' => $this->version,
                'location' => 'https://'.$this->server.'/EWS/Exchange.asmx',
                'impersonation' => $this->impersonation,
            )
        );

        return $this->soap;
    }

    /**
     * Process a response to verify that it succeeded and take the appropriate
     * action
     *
     * @throws EWS_Exception
     *
     * @param stdClass $response
     * @return EWSType
     *
     * @todo Map the response to a real object.
     */
    protected function processResponse($response)
    {
        // If the soap call failed then we need to thow an exception.
        $code = $this->soap->getResponseCode();
        if ($code != 200) {
            throw new EWS_Exception('SOAP client returned status of '.$code, $code);
        }

        return $response;
    }
}
