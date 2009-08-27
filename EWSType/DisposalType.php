<?php
/**
 * Definition of the DisposalType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Types of deletion for items and folders
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DisposalType {
	/**
	 * Completely deletes the item from the server
	 * 
	 * @var string
	 */
	const HARD_DELETE = 'HardDelete';
	
	/**
	 * Moves the item to the "Deleted Items" folder
	 * 
	 * @var string
	 */
	const MOVE_TO_DELETED_ITEMS = 'MoveToDeletedItems';
	
	/**
	 * Marks the item for deletion but does not expunge the item from the server
	 * 
	 * @var string
	 */
	const SOFT_DELETE = 'SoftDelete';
	
	/**
	 * Constructor
	 */
	public function __construct() {
	} // end function __construct()
} // end class EWSType_DisposalType