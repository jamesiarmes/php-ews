<?php
/**
 * Definition of the PostReplyItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PostReplyItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PostReplyItemType {
	/**
	 * NewBodyContent property
	 * 
	 * @var EWSType_BodyType
	 */
	public $NewBodyContent;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'NewBodyContent',
				'required' => false,
				'type' => 'BodyType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PostReplyItemType