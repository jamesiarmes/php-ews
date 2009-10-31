<?php
/**
 * Definition of the BasePagingType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BasePagingType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BasePagingType extends EWSType {
	/**
	 * MaxEntriesReturned property
	 * 
	 * @var EWSType_int
	 */
	public $MaxEntriesReturned;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'MaxEntriesReturned',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BasePagingType