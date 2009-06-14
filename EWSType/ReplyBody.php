<?php
/**
 * Definition of the ReplyBody type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ReplyBody type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ReplyBody {
	/**
	 * Message property
	 * 
	 * @var EWSType_string
	 */
	public $Message;

	/**
	 * lang property
	 * 
	 * @var EWSType_UNKNOWN
	 */
	public $lang;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'Message',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'lang',
				'required' => false,
				'type' => 'UNKNOWN',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ReplyBody