<?php
/**
 * Contains NTLMSoapClient_Exchange.
 */

/**
 * Handles Soap communication with the Exchange server using NTLM
 * authentication
 *
 * @package php-ews\Auth
 */
class NTLMSoapClient_Exchange extends NTLMSoapClient
{
    /**
     * Username for authentication on the exchnage server
     *
     * @var string
     */
    protected $user;

    /**
     * Password for authentication on the exchnage server
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
    public function __construct($wsdl, $options)
    {
        // Verify that a user name and password were entered.
        if (empty($options['user']) || empty($options['password'])) {
            //Check if we have an SSPI enabled libcurl
            //see <curl/curl.h>, line ~2267	#define CURL_VERSION_SSPI         (1<<11) /* Built against Windows SSPI */
            if (!defined('CURL_VERSION_SSPI')){
                define('CURL_VERSION_SSPI', (1<<11));
            }
            $cv = curl_version();
            //Raise Exception if :
            // No SSPI in curl/curl OR user:password not like expected by curl to use SSPI
            // (see http://osdir.com/ml/web.curl.php/2008-05/msg00026.html for example)
            if(($cv['features'] & CURL_VERSION_SSPI) === 0 || $options['user'].':'.$options['password'] !== ':')
            {
                throw new EWS_Exception('A username and password is required without SSPI support in Curl.');
            }
        }

        // Set the username and password properties.
        $this->user = $options['user'];
        $this->password = $options['password'];

        // If a version was set then add it to the headers.
        if (!empty($options['version'])) {
            $this->__default_headers[] = new SoapHeader(
                'http://schemas.microsoft.com/exchange/services/2006/types',
                'RequestServerVersion Version="' . $options['version'] . '"'
            );
        }

        // If impersonation was set then add it to the headers.
        if (!empty($options['impersonation'])) {
            $this->__default_headers[] = new SoapHeader(
                'http://schemas.microsoft.com/exchange/services/2006/types',
                'ExchangeImpersonation',
                $options['impersonation']
            );
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * Returns the response code from the last request
     *
     * @return integer
     */
    public function getResponseCode()
    {
        return curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
    }
}
