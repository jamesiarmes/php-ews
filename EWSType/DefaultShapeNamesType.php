<?php
/**
 * Definition of the DefaultShapeNamesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Default shape names for response shapes
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DefaultShapeNamesType extends EWSType {
	/**
	 * All properties are retured in the response
	 * 
	 * @var string
	 */
	const ALL_PROPERTIES = 'AllProperties';
	
	/**
	 * Default properties are returned in the respoonse
	 * 
	 * @var string
	 */
	const DEFAULT_PROPERTIES = 'Default';
	
	/**
	 * Only folder ids are returned in the response
	 * 
	 * @var string
	 */
	const ID_ONLY = 'IdOnly';
	
	/**
	 * Constructor
	 */
	public function __construct() {
	} // end function __construct()
} // end class EWSType_DefaultShapeNamesType