<?php
/**
 * Contains \jamesiarmes\PhpEws\SoapClient.
 */

namespace jamesiarmes\PhpEws;

use \jamesiarmes\PhpNtlm\SoapClient as NtlmSoapClient;

/**
 * Handles SOAP communication with the Exchange server using NTLM
 * authentication.
 *
 * @package php-ews\Auth
 */
class SoapClient extends NtlmSoapClient
{
    /**
     * {@inheritdoc}
     */
    public function __construct($wsdl, $options)
    {
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
