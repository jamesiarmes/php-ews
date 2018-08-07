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
     * @var boolean Whether to write SOAP response to a file. Used with $last_path.
     */
    protected $write_to_file;

    /**
     * @var callable Where to output binary content.
     */
    protected $cache_name_callback = array();

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
     * NTLM Authorization
     *
     * @var string
     */
    const NTLM_AUTH = 'NTLM_Auth';

    /**
     * OAuth Authorization
     *
     * @var string
     */
    const OAUTH_AUTH = 'OAuth_Auth';

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
     * @var NTLMSoapClient_Exchange|OAuthSoapClient_Exchange
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
     * Method of authorization for access to exchange, either NTLM or OAuth
     *
     * @var string
     */
    protected $auth_method;

    /**
     * Access token when using OAuth Authentication
     *
     * @var string
     */
    protected $access_token;

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

    protected $xml_parser;

    /**
     * A directory to output to for curl.
     *
     * @var string
     */
    protected $file_output;

    /**
     * @var bool Whether or not to get response headers
     */
    protected $enable_response_headers = false;

    /**
     * @var string User agent string to attach to the requests
     */
    protected $user_agent = 'github-php-ews-generic';

	/**
     * Constructor for the ExchangeWebServices class
     *
     * @param string $server
     * @param string $username
     * @param string $password
     * @param string $version one of the ExchangeWebServices::VERSION_* constants
     * @param string $auth_method The method used to authorize exchange
     * @param string $access_token The access token
     * @param bool   $write_to_file Whether to write curl response to file.
     * @param string $file_output The file location to output calls to.
     * @param callable $cache_name_callback Path to write binary cache files.
     */
    public function __construct(
        $server = null,
        $username = null,
        $password = null,
        $version = self::VERSION_2007,
        $auth_method = self::NTLM_AUTH,
        $access_token = null,
        $write_to_file = false,
        $file_output = '/tmp/transfer_output',
        callable $cache_name_callback = null
    ) {
        // Set the object properties.
        $this->setServer($server);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setVersion($version);
        $this->setAuthMethod($auth_method);
        $this->setAccessToken($access_token);
        $this->setWriteToFile($write_to_file);
        $this->file_output = $file_output;

        // set up dir if writing to file is occuring
        if ($write_to_file && !file_exists($this->file_output))
        {
            mkdir($this->file_output, 0777);
        }

        if (is_callable($cache_name_callback))
        {
            $this->setCacheNameCallback($cache_name_callback);
        }
    }

    /**
     * @param string $method
     * @param mixed  $arg
     */
    public function __call($method, $args)
    {
        call_user_func_array([$this, $method], $args);
    }

    /**
     * Where to write binary content when parsed. Paired with $write_to_file
     *
     * @param callable $cache_name_callback Location on disk to write binary content.
     */
    public function setCacheNameCallback(callable $cache_name_callback)
    {
        $this->cache_name_callback[] = $cache_name_callback;
    }

    /**
     * @param bool $write_to_file Determine if we want to write the curl output to disk.
     */
    public function setWriteToFile($write_to_file)
    {
        $this->write_to_file = $write_to_file;
    }

    /**
     * @return bool
     */
    public function getWriteToFile()
    {
        return $this->write_to_file;
    }

    /**
     * Returns the SOAP Client that may be used to make calls against the server
     *
     * @return NTLMSoapClient_Exchange or OAuthSoapClient_Exchange
     */
    public function getClient()
    {
        return $this->initializeSoapClient();
    }

    /**
     * Sets the authorizing method.
     *
     * @param string $auth_method The method to use for authorization, either NTLM or OAuth
	 *
	 * @return bool
     */
    public function setAuthMethod($auth_method)
    {
        $this->auth_method = $auth_method;

        return true;
    }

    /**
     * Sets the access token. This is needed for OAuth authorization.
     *
     * @param string $access_token The access token to use
	 *
	 * @return bool
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;

        return true;
    }

    /**
     * Sets the impersonation property.
     *
     * @param EWSType_ExchangeImpersonationType $impersonation
	 *
	 * @return bool
     */
    public function setImpersonation($impersonation)
    {
        $this->impersonation = $impersonation;

        if ($this->soap)
        {
            $this->soap->setAnchorMailBox($impersonation->ConnectingSID->PrimarySmtpAddress);
        }

        return true;
    }

    /**
     * Sets the password property.
     *
     * @param string $password
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
     * @param EWSTYpe_AddDelegateType $request
     * @return EWSType_AddDelegateResponseMessageType
     */
    public function AddDelegate($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        $parsed_xml = $this->processResponse($response, 'AddDelegateResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'ApplyConversationActionResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'ConvertIdResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'CopyFolderResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'CopyItemResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'CreateAttachmentResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'CreateFolderResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'CreateItemResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'CreateUserConfigurationResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'CreatemanagedFolderResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'DeleteAttachmentResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'DeleteFolderResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'DeleteItemResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'DeleteUserConfigurationResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'DisconnectPhoneCallResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'EmptyFolderResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'ExpandDLResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'ExportItemsResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'FindConversationResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'FindFolderResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'FindItemResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'FindMessageTrackingReportResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetAttachmentResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetDelegateResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetEventsResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetFolderResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetInboxRulesResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetItemResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetMailTipsResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetMessageTrackingReportResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetPasswordExpirationDateResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetPhoneCallInformationResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetRoomListsResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetRoomsResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetServerTimeZonesResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetServiceConfigurationResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetSharingFolderResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetSharingMetadataResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetStreamingEventsResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetUserAvailabilityResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetUserConfigurationResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'GetUserOofSettingsResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'MoveFolderResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'MoveItemResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'PlayOnPhoneResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'RefreshSharingFolderResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'RemoveDelegateResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'ResolveNamesResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'SendItemResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'SetUserOofSettingsResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'SubscribeResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'SyncFolderHierarchyResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'SyncFolderItemsResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'UnsubscribeResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'UpdateDelegateResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'UpdateFolderResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'UpdateInboxRulesResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'UpdateItemResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'UpdateUserConfigurationResponse');
        return $parsed_xml;
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

        $parsed_xml = $this->processResponse($response, 'UploadItemsResponse');
        return $parsed_xml;
    }

    /**
     * Initializes the SoapClient object to make a request
     *
     * @return NTLMSoapClient_Exchange or OAuthSoapClient_Exchange
     */
    protected function initializeSoapClient()
    {
        switch ($this->auth_method)
        {
            case self::NTLM_AUTH:
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
                break;
            case self::OAUTH_AUTH:
                $this->soap = new OAuthSoapClient_Exchange(
                    dirname(__FILE__).'/wsdl/services.wsdl',
                    array(
                        'access_token' => $this->access_token,
                        'version' => $this->version,
                        'location' => 'https://'.$this->server.'/EWS/Exchange.asmx',
                        'impersonation' => $this->impersonation,
                    ),
                    $this->file_output,
                    $this->write_to_file
                );
                break;
        }

        $this->soap->setEnableResponseHeaders($this->enable_response_headers);
        $this->soap->setUserAgent($this->user_agent);
        return $this->soap;
    }

    /**
     * Process a response to verify that it succeeded and take the appropriate
     * action
     *
     *
     * @param stdClass $response
     * @param string $property_offset
     * @return \EWSType
     * @throws \EWS_Exception @todo Map the response to a real object.
     */
    protected function processResponse($response, $property_offset)
    {
        // If the soap call failed then we need to thow an exception.
        $code = $this->soap->getResponseCode();
        if ($code != 200)
        {
            throw new EWS_Exception('SOAP client returned status of ' . $code, $code);
        }

        $this->soap->closeConnection();

        if (!$this->write_to_file)
        {
            return $response;
        }
        else
        {
            $this->xml_parser = new XMLReader();
            $this->xml_parser->open($response, null, LIBXML_PARSEHUGE);
        }

        $xml = $this->parseFullXML();
        unlink($response);

        gc_collect_cycles();

        $this->xml_parser->close();

        $full = $xml->Envelope->Body;

        if (is_null($full))
        {
            throw new EWS_Exception(
                'XML Parse Error'
            );
        }
        elseif (!isset($xml->Envelope->Body->{$property_offset}))
        {
            throw new EWS_Exception(
                'XML Parse Error'
            );
        }

        return $xml->Envelope->Body->{$property_offset};
    }

    /**
     * Run through the xml parser to return an object from XML saved on disk.
     *
     * @return \stdClass
     */
    public function parseFullXML()
    {
        $assoc = new \stdClass;

        while ($this->xml_parser->read())
        {
            if ($this->xml_parser->nodeType == XMLReader::END_ELEMENT)
            {
                break;
            }

            $name = $this->xml_parser->localName;


            if ($this->xml_parser->nodeType == XMLReader::ELEMENT && !$this->xml_parser->isEmptyElement)
            {
                if (isset($assoc->{$name}))
                {
                    if (!is_array($assoc->{$name}))
                    {
                        $place_holder = $assoc->{$name};
                        $assoc->{$name} = array();
                        $assoc->{$name}[] = $place_holder;
                    }

                    $assoc->{$name}[] = $this->parseFullXML();
                }
                else
                {
                    $assoc->{$name} = $this->parseFullXML();
                }

                if ($this->xml_parser->hasAttributes)
                {
                    while ($this->xml_parser->moveToNextAttribute())
                    {
                        $attribute_name = $this->xml_parser->localName;

                        if (!isset($assoc->{$name}))
                        {
                            $assoc->{$name} = new \stdClass;
                        }

                        if (is_array($assoc->{$name}))
                        {
                            if (isset($assoc->{$name}[count($assoc->{$name}) - 1]) && !isset($assoc->{$name}[count($assoc->{$name}) - 1]->{$attribute_name}))
                            {
                                if (!is_object($assoc->{$name}[count($assoc->{$name}) - 1]))
                                {
                                    $assoc->{$name}[count($assoc->{$name}) - 1] = new \stdClass;
                                }

                                $assoc->{$name}[count($assoc->{$name}) - 1]->{$attribute_name} = $this->xml_parser->value;
                            }
                            else
                            {
                                $assoc->{$name}[] = array($attribute_name => $this->xml_parser->value);
                            }

                            continue;
                        }

                        if (!isset($assoc->{$name}->{$attribute_name}) && is_object($assoc->{$name}))
                        {
                            $assoc->{$name}->{$attribute_name} = new \stdClass;
                            $assoc->{$name}->{$attribute_name} = $this->xml_parser->value;
                            continue;
                        }
                        elseif (isset($assoc->{$name}->{$attribute_name}) && !is_array($assoc->{$name}->{$attribute_name}))
                        {
                            $first_elm = $assoc->{$name}->{$attribute_name};
                            $assoc->{$name} = array();
                            $assoc->{$name}[] = $first_elm;
                            $assoc->{$name}[] = array($attribute_name => $this->xml_parser->value);
                        }
                    }
                }
            }
            elseif ($this->xml_parser->isEmptyElement)
            {
                if ($this->xml_parser->hasAttributes)
                {
                    while ($this->xml_parser->moveToNextAttribute())
                    {
                        $attribute_name = $this->xml_parser->localName;

                        if (!isset($assoc->{$name}))
                        {
                            $assoc->{$name} = new \stdClass;
                        }

                        if (is_array($assoc->{$name}))
                        {
                            $assoc->{$name}[] = array($attribute_name => $this->xml_parser->value);
                            continue;
                        }

                        if (!isset($assoc->{$name}->{$attribute_name}) && is_object($assoc->{$name}))
                        {
                            $assoc->{$name}->{$attribute_name} = new \stdClass;
                            $assoc->{$name}->{$attribute_name} = $this->xml_parser->value;
                            continue;
                        }
                        elseif (isset($assoc->{$name}->{$attribute_name}) && !is_array($assoc->{$name}->{$attribute_name}))
                        {
                            $first_elm = $assoc->{$name}->{$attribute_name};
                            $assoc->{$name} = array();
                            $assoc->{$name}[] = $first_elm;
                            $assoc->{$name}[] = array($attribute_name => $this->xml_parser->value);
                        }
                    }
                }
            }
            elseif ($this->xml_parser->nodeType == XMLReader::TEXT)
            {
                $assoc = $this->xml_parser->value;
            }
        }

        if (isset($assoc->MimeContent) && isset($assoc->ItemId->Id) && is_callable($this->cache_name_callback[0]))
        {
            $file_path = $this->cache_name_callback[0](basename(str_replace('/', '', $assoc->ItemId->Id)));
            $cache_handle = fopen($file_path, 'w');
            fwrite($cache_handle, base64_decode($assoc->MimeContent));
            fclose($cache_handle);
            $assoc->MimeContent = $file_path;
        }

        return $assoc;
    }

    /**
     * Sets whether to get response headers during a call.
     * Set this before the call, then after the call, call getResponseHeaders() to get them.
     *
     * @param bool $enable_response_headers
     */
    public function setEnableResponseHeaders($enable_response_headers)
    {
        $this->enable_response_headers = $enable_response_headers;
    }

    /**
     * The request headers of the last call
     *
     * @return string Request headers
     */
    public function getRequestHeaders()
    {
        return $this->soap->__getLastRequestHeaders();
    }

    /**
     * The response headers of the last call, only if setDownloadResponseHeaders(true) called
     *
     * @return string response headers
     */
    public function getResponseHeaders()
    {
        return $this->soap->__getLastResponseHeaders();
    }

    /**
     * Set the user agent to be used for calls
     *
     * @param string $user_agent The user agent to be used for calls
     */
    public function setUserAgent($user_agent)
    {
        $this->user_agent = $user_agent;
    }
}
