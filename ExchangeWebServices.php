<?php
/**
 * Base class of the Exchange Web Services application.
 *
 * @package php-ews
 */

/**
 * Base class of the Exchange Web Services application.
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
     * Sets the impersonation property
     *
     * @param EWSType_ExchangeImpersonationType $impersonation
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
     * @param AddDelegateType $request
     * @return AddDelegateResponseMessageType
     */
    public function AddDelegate($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param ConvertIdType $request
     * @return ConvertIdResponseType
     */
    public function ConvertId($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param CopyFolderType $request
     * @return CopyFolderResponseType
     */
    public function CopyFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param CopyItemType $request
     * @return CopyItemResponseType
     */
    public function CopyItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param CreateAttachmentType $request
     * @return CreateAttachmentResponseType
     */
    public function CreateAttachment($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param CreateFolderType $request
     * @return CreateFolderResponseType
     */
    public function CreateFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param CreateItemType $request
     * @return CreateItemResponseType
     */
    public function CreateItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param CreateManagedFolderRequestType $request
     * @return CreateManagedFolderResponseType
     */
    public function CreateManagedFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param DeleteAttachmentType $request
     * @return DeleteAttachmentResponseType
     */
    public function DeleteAttachment($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param DeleteFolderType $request
     * @return DeleteFolderResponseType
     */
    public function DeleteFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param DeleteItemType $request
     * @return DeleteItemResponseType
     */
    public function DeleteItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param ExpandDLType $request
     * @return ExpandDLResponseType
     */
    public function ExpandDL($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param EWS_FindFolderType $request
     * @return EWS_FindFolderResponseType
     */
    public function FindFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param FindItemType $request
     * @return FindItemResponseType
     */
    public function FindItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param GetAttachmentType $request
     * @return GetAttachmentResponseType
     */
    public function GetAttachment($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param GetDelegateType $request
     * @return GetDelegateResponseMessageType
     */
    public function GetDelegate($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param GetEventsType $request
     * @return GetEventsResponseType
     */
    public function GetEvents($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param GetFolderType $request
     * @return GetFolderResponseType
     */
    public function GetFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param GetItemType $request
     * @return GetItemResponseType
     */
    public function GetItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Retrieve the timezones supported by the server.
     *
     * @since Exchange 2010
     *
     * @param GetServerTimeZonesType $request
     * @return GetServerTimeZonesResponseType
     */
    public function GetServerTimeZones($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param GetUserAvailabilityRequestType $request
     * @return GetUserAvailabilityResponseType
     */
    public function GetUserAvailability($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param GetUserOofSettingsRequest $request
     * @return GetUserOofSettingsResponse
     */
    public function GetUserOofSettings($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param MoveFolderType $request
     * @return MoveFolderResponseType
     */
    public function MoveFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param MoveItemType $request
     * @return MoveItemResponseType
     */
    public function MoveItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param RemoveDelegateType $request
     * @return RemoveDelegateResponseMessageType
     */
    public function RemoveDelegate($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param ResolveNamesType $request
     * @return ResolveNamesResponseType
     */
    public function ResolveNames($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param SendItemType $request
     * @return SendItemResponseType
     */
    public function SendItem($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param SetUserOofSettingsRequest $request
     * @return SetUserOofSettingsResponse
     */
    public function SetUserOofSettings($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param SubscribeType $request
     * @return SubscribeResponseType
     */
    public function Subscribe($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param SyncFolderHierarchyType $request
     * @return SyncFolderHierarchyResponseType
     */
    public function SyncFolderHierarchy($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param SyncFolderItemsType $request
     * @return SyncFolderItemsResponseType
     */
    public function SyncFolderItems($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param UnsubscribeType $request
     * @return UnsubscribeResponseType
     */
    public function Unsubscribe($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param UpdateDelegateType $request
     * @return UpdateDelegateResponseMessageType
     */
    public function UpdateDelegate($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param UpdateFolderType $request
     * @return UpdateFolderResponseType
     */
    public function UpdateFolder($request)
    {
        $this->initializeSoapClient();
        $response = $this->soap->{__FUNCTION__}($request);

        return $this->processResponse($response);
    }

    /**
     * Function Description
     *
     * @param UpdateItemType $request
     * @return UpdateItemResponseType
     */
    public function UpdateItem($request)
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
