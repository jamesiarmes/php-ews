<?php
/**
 * Handles Soap communication with the Exchnage server using NTLM
 * authentication
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class NTLMSoapClient_Exchange extends NTLMSoapClient {
    protected $user;
    protected $password;
    
    public function Exchange_NTLMSoapClient($wsdl, $options = array()) {
		// verify that a user name and password were entered
		if (empty($options['user']) || empty($options['password'])) {
			throw new EWS_Exception('A username and password is required.');
		} // end if no user name and password were entered

		$this->user = $options['user'];
		$this->password = $options['password'];

		parent::SoapClient($wsdl, $options);
    } // end function __contruct()
} // end class NTLMSoapClient_Exchange
