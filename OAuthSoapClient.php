<?php
/**
 * Contains OAuthSoapClient.
 */

/**
 * Soap Client using Microsoft's OAuth Authentication.
 *
 * Adapted from the NTLMSoapClient to use OAuth authentication provided by:
 *
 * Copyright (c) 2008 Invest-In-France Agency http://www.invest-in-france.org
 *
 * Author : Thomas Rabaix
 *
 * Permission to use, copy, modify, and distribute this software for any
 * purpose with or without fee is hereby granted, provided that the above
 * copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
 * WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
 * ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
 * WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
 * ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
 * OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
 *
 * @link http://rabaix.net/en/articles/2008/03/13/using-soap-php-with-ntlm-authentication
 * @author Thomas Rabaix
 *
 * @package php-ews\Auth
 */
class OAuthSoapClient extends SoapClient
{
    /** @var String location for file on disk where downloaded content will be stored. */
    public static $last_path;

    /** @var  String the last 5 characters sliced off to prepend onto the next curl frame. */
    protected $last_segment = null;

    /**
     * The file handler (if one exists) to use for writing curl response to disk
     */
    protected $file_handler;

    protected $write_to_file;
    /**
     * cURL resource used to make the SOAP request
     *
     * @var resource
     */
    protected $ch;

    /**
     * Whether or not to validate ssl certificates
     *
     * @var boolean
     */
    protected $validate = false;

    /**
     * Performs a SOAP request
     *
     * @link http://php.net/manual/en/function.soap-soapclient-dorequest.php
     *
     * @param string $request the xml soap request
     * @param string $location the url to request
     * @param string $action the soap action.
     * @param integer $version the soap version
     * @param integer $one_way
     * @return string the xml soap response.
     * @throws \EWS_Exception
     */
    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        self::$last_path = null;
        $this->last_segment = null;

        $headers = array(
            'Method: POST',
            'Connection: Keep-Alive',
            'User-Agent: PHP-SOAP-CURL',
            'Content-Type: text/xml; charset=utf-8',
            'SOAPAction: "'.$action.'"',
            'Authorization: Bearer ' . $this->access_token
        );

		if (!is_null($this->anchor_mailbox))
		{
			$headers['X-AnchorMailbox'] = $this->anchor_mailbox;
			$headers['X-PreferServerAffinity'] = true;
		}

        $this->__last_request_headers = $headers;
        $this->ch = curl_init($location);

        curl_setopt($this->ch, CURLOPT_TIMEOUT, 300);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, $this->validate);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, $this->validate);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($this->ch, CURLOPT_POST, true);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($this->ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($this->ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC | CURLAUTH_NTLM);

        $xml = '';

        if ($this->write_to_file)
        {
            $next_five_minute_window = $this->file_output . '/' . date('Y_m_d_H_i', ceil(time() / 300) * 300);

            if (!file_exists($next_five_minute_window))
            {
                mkdir($next_five_minute_window);
            }

            $file_path = $next_five_minute_window . '/' . md5($action . $this->access_token . time() . getmypid() . rand(0, getmypid())) . '.' . getmypid();
            $this->file_handler = fopen($file_path, 'w');

            curl_setopt($this->ch, CURLOPT_WRITEFUNCTION, array($this, 'curlWriteFunction'));

            self::$last_path = $file_path;

            // Return valid xml.
            $xml = '<?xml version="1.0" encoding="utf-8"?><s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/"><s:Header><h:ServerVersionInfo MajorVersion="15" MinorVersion="1" MajorBuildNumber="497" MinorBuildNumber="14" Version="V2016_04_13" xmlns:h="http://schemas.microsoft.com/exchange/services/2006/types" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"/></s:Header><s:Body><path>'
                . $file_path .
                '</path></s:Body></s:Envelope>';

            $result = curl_exec($this->ch);

            if (!is_null($this->last_segment))
            {
                fwrite($this->file_handler, $this->last_segment);
            }

            fclose($this->file_handler);

            // check the code and return the proper XML if an issue occured
            $code = $this->getResponseCode();
            if ($code != 200)
            {
                $xml = file_get_contents($file_path);
            }
        }
        else
        {
            curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($this->ch);

            if ($result)
            {
                // replaces anything thats not in the list below with ' '
                // #x9 | #xA | #xD | [#x20-#xD7FF] | [#xE000-#xFFFD] | [#x10000-#x10FFFF]
                $xml = preg_replace("/&#x(([0-8B-CEF])|([1][0-9A-F])|([D][8-9A-F][0-9A-F]{2})|([F][F][F][E-F])|([1-9A-F][1-9A-F][0-9A-F]{4}));/", " ", $result);
            }
        }

        // TODO: Add some real error handling.
        // If the response if false than there was an error and we should throw
        // an exception.
        if ($result === false)
        {
            throw new EWS_Exception(
                'Curl error: ' . curl_error($this->ch),
                curl_errno($this->ch)
            );
        }
        elseif ($result == false)
        {
            throw new EWS_Empty_Exception('response from Microsoft was empty');
        }

        return $xml;
    }

    /**
     * Callback for curl write function. This is used to sanitize invalid input received from microsoft.
     *
     * @param resource $curl_handle The curl handle.
     * @param string   $data        The data received from the curl.
     * @return int     $length      The number of bytes received/processed by the curl.
     */
    public function curlWriteFunction($curl_handle, $data)
    {
        // keep the expected length around for the return to avoid curl errors
        $length = strlen($data);

        if ($this->last_segment !== null)
        {
            $data = $this->last_segment . $data;
        }

        // sanitize the data
        $sanitized_data = preg_replace("/&#x(([0-8B-CEF])|([1][0-9A-F])|([D][8-9A-F][0-9A-F]{2})|([F][F][F][E-F])|([1-9A-F][1-9A-F][0-9A-F]{4}));/", " ", $data);

        // store the last segment of the data
        $this->last_segment = substr($sanitized_data, -10);

        // write the data to the file handler without the last segment
        fwrite($this->file_handler, substr($sanitized_data, 0, -10));

        return $length;
    }

    public function __call($function_name, $arguments)
    {
        $result = parent::__call($function_name, $arguments);

        if ($this->write_to_file)
        {
            return self::$last_path;
        }

        return $result;
    }

    /**
     * Returns last SOAP request headers
     *
     * @link http://php.net/manual/en/function.soap-soapclient-getlastrequestheaders.php
     *
     * @return string the last soap request headers
     */
    public function __getLastRequestHeaders()
    {
        return implode('n', $this->__last_request_headers) . "\n";
    }

    /**
     * Sets whether or not to validate ssl certificates
     *
     * @param boolean $validate
     * @return bool
     */
    public function validateCertificate($validate = true)
    {
        $this->validate = $validate;

        return true;
    }
}
