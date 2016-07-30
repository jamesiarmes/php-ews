<?php
/**
 * Contains \jamesiarmes\PhpEws\SoapClient.
 */

namespace jamesiarmes\PhpEws;

use \jamesiarmes\PhpEws\Ntlm\SoapClient as NtlmSoapClient;

/**
 * Handles Soap communication with the Exchange server using NTLM
 * authentication
 *
 * @package php-ews\Auth
 */
class SoapClient extends NtlmSoapClient
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
            throw new \Exception('A username and password is required.');
        }

        // Set the username and password properties.
        $this->user = $options['user'];
        $this->password = $options['password'];

        // If a version was set then add it to the headers.
        if (!empty($options['version'])) {
            $this->__default_headers[] = new \SoapHeader(
                'http://schemas.microsoft.com/exchange/services/2006/types',
                'RequestServerVersion Version="' . $options['version'] . '"'
            );
        }

        // If impersonation was set then add it to the headers.
        if (!empty($options['impersonation'])) {
            $this->__default_headers[] = new \SoapHeader(
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
