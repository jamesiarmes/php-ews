<?php
/**
 * Definition of the ContactSourceType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ContactSourceType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ContactSourceType extends EWSType {
	/**
	 * Contact is stored in Active Directory.
	 * 
	 * @var string
	 */
	const ACTIVE_DIRECTORY = 'ActiveDirectory';
	
	/**
	 * Contact is stored in the Exchange Store.
	 * 
	 * @var string
	 */
	const EXCHANGE_STORE = 'Store';
	
	/**
	 * Constructor
	 */
	public function __construct() {
		
	} // end function __construct()
} // end class EWSType_ContactSourceType
