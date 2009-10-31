<?php
/**
 * Definition of the WellKnownResponseObjectType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the WellKnownResponseObjectType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_WellKnownResponseObjectType extends EWSType {
	/**
	 * ItemClass property
	 * 
	 * @var EWSType_ItemClassType
	 */
	public $ItemClass;

	/**
	 * Sensitivity property
	 * 
	 * @var EWSType_SensitivityChoicesType
	 */
	public $Sensitivity;

	/**
	 * Body property
	 * 
	 * @var EWSType_BodyType
	 */
	public $Body;

	/**
	 * Attachments property
	 * 
	 * @var EWSType_NonEmptyArrayOfAttachmentsType
	 */
	public $Attachments;

	/**
	 * InternetMessageHeaders property
	 * 
	 * @var EWSType_NonEmptyArrayOfInternetHeadersType
	 */
	public $InternetMessageHeaders;

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
	 * From property
	 * 
	 * @var EWSType_SingleRecipientType
	 */
	public $From;

	/**
	 * ReferenceItemId property
	 * 
	 * @var EWSType_ItemIdType
	 */
	public $ReferenceItemId;

	/**
	 * ObjectName property
	 * 
	 * @var string
	 */
	public $ObjectName;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ItemClass',
				'required' => false,
				'type' => 'ItemClassType',
			),
			array(
				'name' => 'Sensitivity',
				'required' => false,
				'type' => 'SensitivityChoicesType',
			),
			array(
				'name' => 'Body',
				'required' => false,
				'type' => 'BodyType',
			),
			array(
				'name' => 'Attachments',
				'required' => false,
				'type' => 'NonEmptyArrayOfAttachmentsType',
			),
			array(
				'name' => 'InternetMessageHeaders',
				'required' => false,
				'type' => 'NonEmptyArrayOfInternetHeadersType',
			),
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
				'name' => 'From',
				'required' => false,
				'type' => 'SingleRecipientType',
			),
			array(
				'name' => 'ReferenceItemId',
				'required' => false,
				'type' => 'ItemIdType',
			),
			array(
				'name' => 'ObjectName',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class WellKnownResponseObjectType