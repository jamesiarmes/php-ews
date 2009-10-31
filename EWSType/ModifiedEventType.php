<?php
/**
 * Definition of the ModifiedEventType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ModifiedEventType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ModifiedEventType extends EWSType {
	/**
	 * UnreadCount property
	 * 
	 * @var EWSType_int
	 */
	public $UnreadCount;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'UnreadCount',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ModifiedEventType