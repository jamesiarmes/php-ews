<?php
/**
 * Handles Soap communication with the Exchnage server using NTLM
 * authentication
 * 
 * @license http://www.opensource.org/licenses/bsd-license.php
 * @author James I. Armes <jamesiarmes@gmail.com>
 */

/**
 * Handles Soap communication with the Exchnage server using NTLM
 * authentication
 * 
 * @author James I. Armes <jamesiarmes@gmail.com>
 */
class NTLMSoapClient_Exchange extends NTLMSoapClient {
	/**
	 * Username for authentication on the exchnage server
	 * 
	 * @var string
	 */
    protected $user;
	
	/**
	 * password for authentication on the exchnage server
	 * 
	 * @var string
	 */
    protected $password;
	
	/**
	 * Constructor
	 * 
	 * @param string $wsdl
	 * @param array $options
	 */
	public function __construct($wsdl, $options) {
		// verify that a user name and password were entered
		if (empty($options['user']) || empty($options['password'])) {
			throw new EWS_Exception('A username and password is required.');
		} // end if no user name and password were entered
		
		// set the username and password properties
		$this->user = $options['user'];
		$this->password = $options['password'];
		
		parent::__construct($wsdl, $options);
	} // end function __construct()
} // end class NTLMSoapClient_Exchange
