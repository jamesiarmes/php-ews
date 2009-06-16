<?php
/**
 * Base class of the Exchange Web Services application.
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Base class of the Exchange Web Services application.
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class ExchangeWebServices {
	/**
	 * Location of the Exchange server.
	 *
	 * @var string
	 */
	protected $server;

	/**
	 * Username to use when connecting to the Exchange server.
	 *
	 * @var string
	 */
	protected $username;

	/**
	 * Password to use when connecting to the Exchange server.
	 *
	 * @var string
	 */
	protected $password;

	/**
	 * Constructor for the ExchangeWebServices class
	 *
	 * @param string $server
	 * @param string $username
	 * @param string $password
	 */
	public function __construct($server = null, $username = null,
		$password = null) {
		// set the object properties
		$this->setServer($server);
		$this->setUsername($username);
		$this->setPassword($password);
	} // end function __construct()

	/**
	 * Sets the password property
	 *
	 * @param string $password
	 */
	public function setPassword($password) {
		$this->password = $password;

		return true;
	} // end function setPassword()

	/**
	 * Sets the server property
	 *
	 * @param string $server
	 */
	public function setServer($server) {
		$this->server = $server;

		return true;
	} // end function setServer()

	/**
	 * Sets the user name property
	 *
	 * @param string $username
	 */
	public function setUsername($username) {
		$this->username = $username;

		return true;
	} // end function setUsername()

	/**
	 * Function Description
	 *
	 * @param AddDelegateType $request
	 * @return AddDelegateResponseMessageType
	 */
	public function AddDelegate($request) {
	} // end function AddDelegate()

	/**
	 * Function Description
	 *
	 * @param ConvertIdType $request
	 * @return ConvertIdResponseType
	 */
	public function ConvertId($request) {
	} // end function ConvertId()

	/**
	 * Function Description
	 *
	 * @param CopyFolderType $request
	 * @return CopyFolderResponseType
	 */
	public function CopyFolder($request) {
	} // end function CopyFolder()

	/**
	 * Function Description
	 *
	 * @param CopyItemType $request
	 * @return CopyItemResponseType
	 */
	public function CopyItem($request) {
	} // end function CopyItem()

	/**
	 * Function Description
	 *
	 * @param CreateAttachmentType $request
	 * @return CreateAttachmentResponseType
	 */
	public function CreateAttachment($request) {
	} // end function CreateAttachment()

	/**
	 * Function Description
	 *
	 * @param CreateFolderType $request
	 * @return CreateFolderResponseType
	 */
	public function CreateFolder($request) {
	} // end function CreateFolder()

	/**
	 * Function Description
	 *
	 * @param CreateItemType $request
	 * @return CreateItemResponseType
	 */
	public function CreateItem($request) {
	} // end function CreateItem()

	/**
	 * Function Description
	 *
	 * @param CreateManagedFolderRequestType $request
	 * @return CreateManagedFolderResponseType
	 */
	public function CreateManagedFolder($request) {
	} // end function CreateManagedFolder()

	/**
	 * Function Description
	 *
	 * @param DeleteAttachmentType $request
	 * @return DeleteAttachmentResponseType
	 */
	public function DeleteAttachment($request) {
	} // end function DeleteAttachment()

	/**
	 * Function Description
	 *
	 * @param DeleteFolderType $request
	 * @return DeleteFolderResponseType
	 */
	public function DeleteFolder($request) {
	} // end function DeleteFolder()

	/**
	 * Function Description
	 *
	 * @param DeleteItemType $request
	 * @return DeleteItemResponseType
	 */
	public function DeleteItem($request) {
	} // end function DeleteItem()

	/**
	 * Function Description
	 *
	 * @param ExpandDLType $request
	 * @return ExpandDLResponseType
	 */
	public function ExpandDL($request) {
	} // end function ExpandDL()

	/**
	 * Function Description
	 *
	 * @param EWS_FindFolderType $request
	 * @return EWS_FindFolderResponseType
	 */
	public function FindFolder($request) {
		return $this->initializeSoapClient()->FindFolder($request);
	} // end function FindFolder()

	/**
	 * Function Description
	 *
	 * @param FindItemType $request
	 * @return FindItemResponseType
	 */
	public function FindItem($request) {
	} // end function FindItem()

	/**
	 * Function Description
	 *
	 * @param GetAttachmentType $request
	 * @return GetAttachmentResponseType
	 */
	public function GetAttachment($request) {
	} // end function GetAttachment()

	/**
	 * Function Description
	 *
	 * @param GetDelegateType $request
	 * @return GetDelegateResponseMessageType
	 */
	public function GetDelegate($request) {
	} // end function GetDelegate()

	/**
	 * Function Description
	 *
	 * @param GetEventsType $request
	 * @return GetEventsResponseType
	 */
	public function GetEvents($request) {
	} // end function GetEvents()

	/**
	 * Function Description
	 *
	 * @param GetFolderType $request
	 * @return GetFolderResponseType
	 */
	public function GetFolder($request) {
	} // end function GetFolder()

	/**
	 * Function Description
	 *
	 * @param GetItemType $request
	 * @return GetItemResponseType
	 */
	public function GetItem($request) {
	} // end function GetItem()

	/**
	 * Function Description
	 *
	 * @param GetUserAvailabilityRequestType $GetUserAvailabilityRequest
	 * @return GetUserAvailabilityResponseType
	 */
	public function GetUserAvailability($GetUserAvailabilityRequest) {
	} // end function GetUserAvailability()

	/**
	 * Function Description
	 *
	 * @param GetUserOofSettingsRequest $GetUserOofSettingsRequest
	 * @return GetUserOofSettingsResponse
	 */
	public function GetUserOofSettings($GetUserOofSettingsRequest) {
	} // end function GetUserOofSettings()

	/**
	 * Function Description
	 *
	 * @param MoveFolderType $request
	 * @return MoveFolderResponseType
	 */
	public function MoveFolder($request) {
	} // end function MoveFolder()

	/**
	 * Function Description
	 *
	 * @param MoveItemType $request
	 * @return MoveItemResponseType
	 */
	public function MoveItem($request) {
	} // end function MoveItem()

	/**
	 * Function Description
	 *
	 * @param RemoveDelegateType $request
	 * @return RemoveDelegateResponseMessageType
	 */
	public function RemoveDelegate($request) {
	} // end function RemoveDelegate()

	/**
	 * Function Description
	 *
	 * @param ResolveNamesType $request
	 * @return ResolveNamesResponseType
	 */
	public function ResolveNames($request) {
	} // end function ResolveNames()

	/**
	 * Function Description
	 *
	 * @param SendItemType $request
	 * @return SendItemResponseType
	 */
	public function SendItem($request) {
	} // end function SendItem()

	/**
	 * Function Description
	 *
	 * @param SetUserOofSettingsRequest $SetUserOofSettingsRequest
	 * @return SetUserOofSettingsResponse
	 */
	public function SetUserOofSettings($SetUserOofSettingsRequest) {
	} // end function SetUserOofSettings()

	/**
	 * Function Description
	 *
	 * @param SubscribeType $request
	 * @return SubscribeResponseType
	 */
	public function Subscribe($request) {
	} // end function Subscribe()

	/**
	 * Function Description
	 *
	 * @param SyncFolderHierarchyType $request
	 * @return SyncFolderHierarchyResponseType
	 */
	public function SyncFolderHierarchy($request) {
	} // end function SyncFolderHierarchy()

	/**
	 * Function Description
	 *
	 * @param SyncFolderItemsType $request
	 * @return SyncFolderItemsResponseType
	 */
	public function SyncFolderItems($request) {
	} // end function SyncFolderItems()

	/**
	 * Function Description
	 *
	 * @param UnsubscribeType $request
	 * @return UnsubscribeResponseType
	 */
	public function Unsubscribe($request) {
	} // end function Unsubscribe()

	/**
	 * Function Description
	 *
	 * @param UpdateDelegateType $request
	 * @return UpdateDelegateResponseMessageType
	 */
	public function UpdateDelegate($request) {
	} // end function UpdateDelegate()

	/**
	 * Function Description
	 *
	 * @param UpdateFolderType $request
	 * @return UpdateFolderResponseType
	 */
	public function UpdateFolder($request) {
	} // end function UpdateFolder()

	/**
	 * Function Description
	 *
	 * @param UpdateItemType $request
	 * @return UpdateItemResponseType
	 */
	public function UpdateItem($request) {
	} // end function UpdateItem()

	/**
	 * Initializes the SoapClient object to make a request
	 * 
	 * @return Exchange_NTLMSoapClient
	 */
	protected function initializeSoapClient() {
		return new Exchange_NTLMSoapClient(
			dirname(__FILE__).'/wsdl/services.wsdl',
			array(
				'user' => $this->username,
				'password' => $this->password,
				'location' => 'https://'.$this->server.'/EWS/Exchange.asmx',
			)); // end return
	} // end function initializeSoapClient()
} // end class ExchangeWebService