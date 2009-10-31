<?php
/**
 * Definition of the ItemQueryTraversalType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Types of sub-tree traversal for deletion and enumeration
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ItemQueryTraversalType extends EWSType {
	/**
	 * Consider only folders that are direct children of the parent folder(s) in
	 * question
	 * 
	 * @var string
	 */
	const SHALLOW = 'Shallow';
	
	/**
	 * Consider only those items that are soft deleted from the parent folders
	 * specified
	 * 
	 * @var string
	 */
	const SOFT_DELETED = 'SoftDeleted';
	
	/**
	 * Constructor
	 */
	public function __construct() {
	} // end function __construct()
} // end class EWSType_ItemQueryTraversalType