<?php
/**
 * Contains ExchangeWebServices.
 */

namespace jamesiarmes\EWS;

use jamesiarmes\EWS\NTLMSoapClient\NTLMSoapClient_Exchange;

/**
 * Base class of the Exchange Web Services application.
 *
 * @package jamesiarmes\EWS\Client
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
     * @var ExchangeImpersonationType
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
     * @param ExchangeImpersonationType $impersonation
     *
     * @return bool
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
     *
     * @return bool
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
     *
     * @return bool
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
     *
     * @return bool
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
     *
     * @return bool
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
     * @param AddDelegateType $request
     *
     * @return AddDelegateResponseMessageType
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
     * @param ApplyConversationActionType $request
     *
     * @return ApplyConversationActionResponseType
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
     * @param ConvertIdType $request
     *
     * @return ConvertIdResponseType
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
     * @param CopyFolderType $request
     *
     * @return CopyFolderResponseType
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
     * @param CopyItemType $request
     *
     * @return CopyItemResponseType
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
     * @param CreateAttachmentType $request
     *
     * @return CreateAttachmentResponseType
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
     * @param CreateFolderType $request
     *
     * @return CreateFolderResponseType
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
     * @param CreateItemType $request
     *
     * @return CreateItemResponseType
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
     * @param CreateUserConfigurationType $request
     *
     * @return CreateUserConfigurationResponseType
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
     * @param CreateManagedFolderRequestType $request
     *
     * @return CreateManagedFolderResponseType
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
     * @param DeleteAttachmentType $request
     *
     * @return DeleteAttachmentResponseType
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
     * @param DeleteFolderType $request
     *
     * @return DeleteFolderResponseType
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
     * @param DeleteItemType $request
     *
     * @return DeleteItemResponseType
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
     * @param DeleteUserConfigurationType $request
     *
     * @return DeleteUserConfigurationResponseType
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
     * @param DisconnectPhoneCallType $request
     *
     * @return DisconnectPhoneCallResponseMessageType
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
     * @param EmptyFolderType $request
     *
     * @return EmptyFolderResponseType
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
     * @param ExpandDLType $request
     *
     * @return ExpandDLResponseType
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
     * @param ExportItemsType $request
     *
     * @return ExportItemsResponseType
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
     * @param FindConversationType $request
     *
     * @return FindConversationResponseMessageType
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
     * @param FindFolderType $request
     *
     * @return FindFolderResponseType
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
     * @param FindItemType $request
     *
     * @return FindItemResponseType
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
     * @param FindMessageTrackingReportRequestType $request
     *
     * @return FindMessageTrackingReportResponseMessageType
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
     * @param GetAttachmentType $request
     *
     * @return GetAttachmentResponseType
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
     * @param GetDelegateType $request
     *
     * @return GetDelegateResponseMessageType
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
     * @param GetEventsType $request
     *
     * @return GetEventsResponseType
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
     * @param GetFolderType $request
     *
     * @return GetFolderResponseType
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
     * @param GetInboxRulesRequestType $request
     *
     * @return GetInboxRulesResponseType
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
     * @param GetItemType $request
     *
     * @return GetItemResponseType
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
     * @param GetMailTipsType $request
     *
     * @return GetMailTipsResponseMessageType
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
     * @param GetMessageTrackingReportRequestType $request
     *
     * @return GetMessageTrackingReportResponseMessageType
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
     * @param GetPasswordExpirationDateType $request
     *
     * @return GetPasswordExpirationDateResponseMessageType
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
     * @param GetPhoneCallInformationType $request
     *
     * @return GetPhoneCallInformationResponseMessageType
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
     * @param GetRoomListsType $request
     *
     * @return GetRoomListsResponseMessageType
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
     * @param GetRoomsType $request
     *
     * @return GetRoomsResponseMessageType
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
     * @param GetServerTimeZonesType $request
     *
     * @return GetServerTimeZonesResponseType
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
     * @param GetServiceConfigurationType $request
     *
     * @return GetServiceConfigurationResponseMessageType
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
     * @param GetSharingFolderType $request
     *
     * @return GetSharingFolderResponseMessageType
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
     * @param GetSharingMetadataType $request
     *
     * @return GetSharingMetadataResponseMessageType
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
     * @param GetStreamingEventsType $request
     *
     * @return GetStreamingEventsResponseType
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
     * @param GetUserAvailabilityRequestType $request
     *
     * @return GetUserAvailabilityResponseType
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
     * @param GetUserConfigurationType $request
     *
     * @return GetUserConfigurationResponseType
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
     * @param GetUserOofSettingsRequest $request
     *
     * @return GetUserOofSettingsResponse
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
     * @param MoveFolderType $request
     *
     * @return MoveFolderResponseType
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
     * @param MoveItemType $request
     *
     * @return MoveItemResponseType
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
     * @param PlayOnPhoneType $request
     *
     * @return PlayOnPhoneResponseMessageType
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
     * @param RefreshSharingFolderType $request
     *
     * @return RefreshSharingFolderResponseMessageType
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
     * @param RemoveDelegateType $request
     *
     * @return RemoveDelegateResponseMessageType
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
     * @param ResolveNamesType $request
     *
     * @return ResolveNamesResponseType
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
     * @param SendItemType $request
     *
     * @return SendItemResponseType
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
     * @param SetUserOofSettingsRequest $request
     *
     * @return SetUserOofSettingsResponse
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
     * @param SubscribeType $request
     *
     * @return SubscribeResponseType
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
     * @param SyncFolderHierarchyType $request
     *
     * @return SyncFolderHierarchyResponseType
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
     * @param SyncFolderItemsType $request
     *
     * @return SyncFolderItemsResponseType
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
     * @param UnsubscribeType $request
     *
     * @return UnsubscribeResponseType
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
     * @param UpdateDelegateType $request
     *
     * @return UpdateDelegateResponseMessageType
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
     * @param UpdateFolderType $request
     *
     * @return UpdateFolderResponseType
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
     * @param UpdateInboxRulesRequestType $request
     *
     * @return UpdateInboxRulesResponseType
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
     * @param UpdateItemType $request
     *
     * @return UpdateItemResponseType
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
     * @param UpdateUserConfigurationType $request
     *
     * @return UpdateUserConfigurationResponseType
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
     * @param UploadItemsType $request
     *
     * @return UploadItemsResponseType
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
            dirname(__FILE__) . '/wsdl/services.wsdl',
            array(
                'user'          => $this->username,
                'password'      => $this->password,
                'version'       => $this->version,
                'location'      => 'https://' . $this->server . '/EWS/Exchange.asmx',
                'impersonation' => $this->impersonation,
            )
        );

        return $this->soap;
    }

    /**
     * Process a response to verify that it succeeded and take the appropriate
     * action
     *
     * @throws Exception
     *
     * @param \stdClass $response
     *
     * @return EWSType
     *
     * @todo Map the response to a real object.
     */
    protected function processResponse($response)
    {
        // If the soap call failed then we need to throw an exception.
        $code = $this->soap->getResponseCode();
        if ($code != 200) {
            throw new Exception('SOAP client returned status of ' . $code, $code);
        }

        return $response;
    }
}
