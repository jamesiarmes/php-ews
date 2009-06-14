<?php
/**
 * Definition of the PostItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PostItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PostItemType {
	/**
	 * ConversationIndex property
	 * 
	 * @var EWSType_base64Binary
	 */
	public $ConversationIndex;

	/**
	 * ConversationTopic property
	 * 
	 * @var EWSType_string
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
	 * @var EWSType_string
	 */
	public $InternetMessageId;

	/**
	 * IsRead property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsRead;

	/**
	 * PostedTime property
	 * 
	 * @var EWSType_dateTime
	 */
	public $PostedTime;

	/**
	 * References property
	 * 
	 * @var EWSType_string
	 */
	public $References;

	/**
	 * Sender property
	 * 
	 * @var EWSType_SingleRecipientType
	 */
	public $Sender;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
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
				'name' => 'PostedTime',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'References',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Sender',
				'required' => false,
				'type' => 'SingleRecipientType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PostItemType