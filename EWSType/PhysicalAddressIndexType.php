<?php
/**
 * Definition of the PhysicalAddressIndexType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PhysicalAddressIndexType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PhysicalAddressIndexType extends EWSType {
	/**
	 * Address index for business.
	 * 
	 * @var string
	 */
	const BUSINESS = 'Business';
	
	/**
	 * Address index for home.
	 * 
	 * @var string
	 */
	const HOME = 'Home';
	
	/**
	 * Address index for none.
	 * 
	 * @var string
	 */
	const NONE = 'None';
	
	/**
	 * Address index for other.
	 * 
	 * @var string
	 */
	const OTHER = 'Other';
	
	/**
	 * Constructor
	 */
	public function __construct() {
		
	} // end function __construct()
} // end class EWSType_PhysicalAddressIndexType
