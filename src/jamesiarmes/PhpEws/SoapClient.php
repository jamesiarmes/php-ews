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
     * Returns the response code from the last request
     *
     * @return integer
     *
     * @todo Move this to the php-ntlm library and remove this class.
     */
    public function getResponseCode()
    {
        return curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
    }
}
