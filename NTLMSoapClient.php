<?php

class NTLMSoapClient extends SoapClient {
	
	protected $validate = false;
	
	public function __doRequest($request, $location, $action, $version) {
		$headers = array(
			'Method: POST',
			'Connection: Keep-Alive',
			'User-Agent: PHP-SOAP-CURL',
			'Content-Type: text/xml; charset=utf-8',
			'SOAPAction: "'.$action.'"',
		);
		$this->__last_request_headers = $headers;
		$ch = curl_init($location);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_POST, true );
		curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
		curl_setopt($ch, CURLOPT_USERPWD, $this->user.':'.$this->password);
	
		
		$response = curl_exec($ch);
                return $response;
	}
	
	public function __getLastRequestHeaders() {
		return implode("n", $this->__last_request_headers)."n";
	}
	
	public function validateCertificate($validate = true) {
		$this->validate = $validate;
		
		return true;
	}
} 