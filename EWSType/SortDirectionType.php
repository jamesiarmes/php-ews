<?php
/**
 * Definition of the SortDirectionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Sort order specification
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SortDirectionType extends EWSType {
	/**
	 * Items are sorted in ascending order
	 * 
	 * @var string
	 */
	const ASCENDING = 'Ascending';
	
	/**
	 * Items are sorted in descending order
	 * 
	 * @var string
	 */
	const DESCENDING = 'Descending';
	
	/**
	 * Constructor
	 */
	public function __construct() {
	} // end function __construct()
} // end class EWSType_SortDirectionType