<?php
/**
 * Definition of the ItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ItemType extends EWSType {
	/**
	 * MimeContent property
	 * 
	 * @var EWSType_MimeContentType
	 */
	public $MimeContent;

	/**
	 * ItemId property
	 * 
	 * @var EWSType_ItemIdType
	 */
	public $ItemId;

	/**
	 * ParentFolderId property
	 * 
	 * @var EWSType_FolderIdType
	 */
	public $ParentFolderId;

	/**
	 * ItemClass property
	 * 
	 * @var EWSType_ItemClassType
	 */
	public $ItemClass;

	/**
	 * Subject property
	 * 
	 * @var string
	 */
	public $Subject;

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
	 * DateTimeReceived property
	 * 
	 * @var EWSType_dateTime
	 */
	public $DateTimeReceived;

	/**
	 * Size property
	 * 
	 * @var EWSType_int
	 */
	public $Size;

	/**
	 * Categories property
	 * 
	 * @var EWSType_ArrayOfStringsType
	 */
	public $Categories;

	/**
	 * Importance property
	 * 
	 * @var EWSType_ImportanceChoicesType
	 */
	public $Importance;

	/**
	 * InReplyTo property
	 * 
	 * @var string
	 */
	public $InReplyTo;

	/**
	 * IsSubmitted property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsSubmitted;

	/**
	 * IsDraft property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsDraft;

	/**
	 * IsFromMe property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsFromMe;

	/**
	 * IsResend property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsResend;

	/**
	 * IsUnmodified property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsUnmodified;

	/**
	 * InternetMessageHeaders property
	 * 
	 * @var EWSType_NonEmptyArrayOfInternetHeadersType
	 */
	public $InternetMessageHeaders;

	/**
	 * DateTimeSent property
	 * 
	 * @var EWSType_dateTime
	 */
	public $DateTimeSent;

	/**
	 * DateTimeCreated property
	 * 
	 * @var EWSType_dateTime
	 */
	public $DateTimeCreated;

	/**
	 * ResponseObjects property
	 * 
	 * @var EWSType_NonEmptyArrayOfResponseObjectsType
	 */
	public $ResponseObjects;

	/**
	 * ReminderDueBy property
	 * 
	 * @var EWSType_dateTime
	 */
	public $ReminderDueBy;

	/**
	 * ReminderIsSet property
	 * 
	 * @var EWSType_boolean
	 */
	public $ReminderIsSet;

	/**
	 * ReminderMinutesBeforeStart property
	 * 
	 * @var EWSType_ReminderMinutesBeforeStartType
	 */
	public $ReminderMinutesBeforeStart;

	/**
	 * DisplayCc property
	 * 
	 * @var string
	 */
	public $DisplayCc;

	/**
	 * DisplayTo property
	 * 
	 * @var string
	 */
	public $DisplayTo;

	/**
	 * HasAttachments property
	 * 
	 * @var EWSType_boolean
	 */
	public $HasAttachments;

	/**
	 * ExtendedProperty property
	 * 
	 * @var EWSType_ExtendedPropertyType
	 */
	public $ExtendedProperty;

	/**
	 * Culture property
	 * 
	 * @var EWSType_language
	 */
	public $Culture;

	/**
	 * EffectiveRights property
	 * 
	 * @var EWSType_EffectiveRightsType
	 */
	public $EffectiveRights;

	/**
	 * LastModifiedName property
	 * 
	 * @var string
	 */
	public $LastModifiedName;

	/**
	 * LastModifiedTime property
	 * 
	 * @var EWSType_dateTime
	 */
	public $LastModifiedTime;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'MimeContent',
				'required' => false,
				'type' => 'MimeContentType',
			),
			array(
				'name' => 'ItemId',
				'required' => false,
				'type' => 'ItemIdType',
			),
			array(
				'name' => 'ParentFolderId',
				'required' => false,
				'type' => 'FolderIdType',
			),
			array(
				'name' => 'ItemClass',
				'required' => false,
				'type' => 'ItemClassType',
			),
			array(
				'name' => 'Subject',
				'required' => false,
				'type' => 'string',
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
				'name' => 'DateTimeReceived',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'Size',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'Categories',
				'required' => false,
				'type' => 'ArrayOfStringsType',
			),
			array(
				'name' => 'Importance',
				'required' => false,
				'type' => 'ImportanceChoicesType',
			),
			array(
				'name' => 'InReplyTo',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'IsSubmitted',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsDraft',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsFromMe',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsResend',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsUnmodified',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'InternetMessageHeaders',
				'required' => false,
				'type' => 'NonEmptyArrayOfInternetHeadersType',
			),
			array(
				'name' => 'DateTimeSent',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'DateTimeCreated',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'ResponseObjects',
				'required' => false,
				'type' => 'NonEmptyArrayOfResponseObjectsType',
			),
			array(
				'name' => 'ReminderDueBy',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'ReminderIsSet',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'ReminderMinutesBeforeStart',
				'required' => false,
				'type' => 'ReminderMinutesBeforeStartType',
			),
			array(
				'name' => 'DisplayCc',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'DisplayTo',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'HasAttachments',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'ExtendedProperty',
				'required' => false,
				'type' => 'ExtendedPropertyType',
			),
			array(
				'name' => 'Culture',
				'required' => false,
				'type' => 'language',
			),
			array(
				'name' => 'EffectiveRights',
				'required' => false,
				'type' => 'EffectiveRightsType',
			),
			array(
				'name' => 'LastModifiedName',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'LastModifiedTime',
				'required' => false,
				'type' => 'dateTime',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ItemType