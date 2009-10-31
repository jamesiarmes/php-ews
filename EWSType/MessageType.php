<?php
/**
 * Definition of the MessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the MessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_MessageType extends EWSType {
	/**
	 * Sender property
	 * 
	 * @var EWSType_SingleRecipientType
	 */
	public $Sender;

	/**
	 * ToRecipients property
	 * 
	 * @var EWSType_ArrayOfRecipientsType
	 */
	public $ToRecipients;

	/**
	 * CcRecipients property
	 * 
	 * @var EWSType_ArrayOfRecipientsType
	 */
	public $CcRecipients;

	/**
	 * BccRecipients property
	 * 
	 * @var EWSType_ArrayOfRecipientsType
	 */
	public $BccRecipients;

	/**
	 * IsReadReceiptRequested property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsReadReceiptRequested;

	/**
	 * IsDeliveryReceiptRequested property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsDeliveryReceiptRequested;

	/**
	 * ConversationIndex property
	 * 
	 * @var EWSType_base64Binary
	 */
	public $ConversationIndex;

	/**
	 * ConversationTopic property
	 * 
	 * @var string
	 */
	public $ConversationTopic;

	/**
	 * From property
	 * 
	 * @var EWSType_SingleRecipientType
	 */
	public $From;

	/**
	 * InternetMessageId property
	 * 
	 * @var string
	 */
	public $InternetMessageId;

	/**
	 * IsRead property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsRead;

	/**
	 * IsResponseRequested property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsResponseRequested;

	/**
	 * References property
	 * 
	 * @var string
	 */
	public $References;

	/**
	 * ReplyTo property
	 * 
	 * @var EWSType_ArrayOfRecipientsType
	 */
	public $ReplyTo;

	/**
	 * ReceivedBy property
	 * 
	 * @var EWSType_SingleRecipientType
	 */
	public $ReceivedBy;

	/**
	 * ReceivedRepresenting property
	 * 
	 * @var EWSType_SingleRecipientType
	 */
	public $ReceivedRepresenting;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Sender',
				'required' => false,
				'type' => 'SingleRecipientType',
			),
			array(
				'name' => 'ToRecipients',
				'required' => false,
				'type' => 'ArrayOfRecipientsType',
			),
			array(
				'name' => 'CcRecipients',
				'required' => false,
				'type' => 'ArrayOfRecipientsType',
			),
			array(
				'name' => 'BccRecipients',
				'required' => false,
				'type' => 'ArrayOfRecipientsType',
			),
			array(
				'name' => 'IsReadReceiptRequested',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsDeliveryReceiptRequested',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'ConversationIndex',
				'required' => false,
				'type' => 'base64Binary',
			),
			array(
				'name' => 'ConversationTopic',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'From',
				'required' => false,
				'type' => 'SingleRecipientType',
			),
			array(
				'name' => 'InternetMessageId',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'IsRead',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsResponseRequested',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'References',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'ReplyTo',
				'required' => false,
				'type' => 'ArrayOfRecipientsType',
			),
			array(
				'name' => 'ReceivedBy',
				'required' => false,
				'type' => 'SingleRecipientType',
			),
			array(
				'name' => 'ReceivedRepresenting',
				'required' => false,
				'type' => 'SingleRecipientType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class MessageType