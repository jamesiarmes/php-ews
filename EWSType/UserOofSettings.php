<?php
/**
 * Definition of the UserOofSettings type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the UserOofSettings type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_UserOofSettings extends EWSType {
	/**
	 * OofState property
	 * 
	 * @var EWSType_OofState
	 */
	public $OofState;

	/**
	 * ExternalAudience property
	 * 
	 * @var EWSType_ExternalAudience
	 */
	public $ExternalAudience;

	/**
	 * Duration property
	 * 
	 * @var EWSType_Duration
	 */
	public $Duration;

	/**
	 * InternalReply property
	 * 
	 * @var EWSType_ReplyBody
	 */
	public $InternalReply;

	/**
	 * ExternalReply property
	 * 
	 * @var EWSType_ReplyBody
	 */
	public $ExternalReply;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'OofState',
				'required' => false,
				'type' => 'OofState',
			),
			array(
				'name' => 'ExternalAudience',
				'required' => false,
				'type' => 'ExternalAudience',
			),
			array(
				'name' => 'Duration',
				'required' => false,
				'type' => 'Duration',
			),
			array(
				'name' => 'InternalReply',
				'required' => false,
				'type' => 'ReplyBody',
			),
			array(
				'name' => 'ExternalReply',
				'required' => false,
				'type' => 'ReplyBody',
			),
		); // end $this->schema
	} // end function __construct()
} // end class UserOofSettings