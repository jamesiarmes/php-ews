<?php
/**
 * Contains \jamesiarmes\PhpEws\Autodiscover.
 */

namespace jamesiarmes\PhpEws;

/**
 * Exchange Web Services Autodiscover implementation
 *
 * This class supports POX (Plain Old XML), which is deprecated but functional
 * in Exchange 2010. It may make sense for you to combine your Autodiscovery
 * efforts with a SOAP Autodiscover request as well.
 *
 * USAGE:
 *
 * (after any auto-loading class incantation)
 *
 * $ews = EWSAutodiscover::getEWS($email, $password);
 *
 * -- OR --
 *
 * If there are issues with your cURL installation that require you to specify
 * a path to a valid Certificate Authority, you can configure that manually.
 *
 * $auto = new EWSAutodiscover($email, $password);
 * $auto->setCAInfo('/path/to/your/cacert.pem');
 * $ews = $auto->newEWS();
 *
 * @link http://technet.microsoft.com/en-us/library/bb332063(EXCHG.80).aspx
 * @link https://www.testexchangeconnectivity.com/
 *
 * @package php-ews\AutoDiscovery
 */
class Autodiscover
{
    /**
     * The path appended to the various schemes and hostnames used during
     * autodiscovery.
     *
     * @var string
     */
    const AUTODISCOVER_PATH = '/autodiscover/autodiscover.xml';

    /**
     * Server was discovered using the TLD method.
     *
     * @var integer
     */
    const AUTODISCOVERED_VIA_TLD = 10;

    /**
     * Server was discovered using the subdomain method.
     *
     * @var integer
     */
    const AUTODISCOVERED_VIA_SUBDOMAIN = 11;

    /**
     * Server was discovered using the unauthenticated GET method.
     *
     * @var integer
     */
    const AUTODISCOVERED_VIA_UNAUTHENTICATED_GET = 12;

    /**
     * Server was discovered using the DNS SRV redirect method.
     *
     * @var integer
     */
    const AUTODISCOVERED_VIA_SRV_RECORD = 13;

    /**
     * Server was discovered using the HTTP redirect method.
     *
     * @var integer
     *
     * @todo We do not currently support this.
     */
    const AUTODISCOVERED_VIA_RESPONSE_REDIRECT = 14;

    /**
     * The email address to attempt autodiscovery against.
     *
     * @var string
     */
    protected $email;

    /**
     * The password to present during autodiscovery.
     *
     * @var string
     */
    protected $password;

    /**
     * The Exchange username to use during authentication. If unspecified,
     * the provided email address will be used as the username.
     *
     * @var string
     */
    protected $username;

    /**
     * The top-level domain name, extracted from the provided email address.
     *
     * @var string
     */
    protected $tld;

    /**
     * The Autodiscover XML request. Since it's used repeatedly, it's cached
     * in this property to avoid redundant re-generation.
     *
     * @var string
     */
    protected $requestxml;

    /**
     * The Certificate Authority path. Should point to a directory containing
     * one or more certificates to use in SSL verification.
     *
     * @var string
     */
    protected $capath;

    /**
     * The path to a specific Certificate Authority file. Get one and use it
     * for full Autodiscovery compliance.
     *
     * @var string
     *
     * @link http://curl.haxx.se/ca/cacert.pem
     * @link http://curl.haxx.se/ca/
     */
    protected $cainfo;

    /**
     * Skip SSL verification. Bad idea, and violates the strict Autodiscover
     * protocol. But, here in case you have no other option.
     * Defaults to FALSE.
     *
     * @var boolean
     */
    protected $skip_ssl_verification = false;

    /**
     * The body of the last response.
     *
     * @var string
     */
    public $last_response;

    /**
     * An associative array of response headers that resulted from the
     * last request. Keys are lowercased for easy checking.
     *
     * @var array
     */
    public $last_response_headers;

    /**
     * The output of curl_info() relating to the most recent cURL request.
     *
     * @var array
     */
    public $last_info;

    /**
     * The cURL error code associated with the most recent cURL request.
     *
     * @var integer
     */
    public $last_curl_errno;

    /**
     * Human-readable description of the most recent cURL error.
     *
     * @var string
     */
    public $last_curl_error;

    /**
     * The value in seconds to use for Autodiscover host connection timeouts.
     * Default connection timeout is 2 seconds, so that unresponsive methods
     * can be bypassed quickly.
     *
     * @var integer
     */
    public $connection_timeout = 2;

    /**
     * Information about an Autodiscover Response containing an error will
     * be stored here.
     *
     * @var mixed
     */
    public $error = false;

    /**
     * Information about an Autodiscover Response with a redirect will be
     * retained here.
     *
     * @var mixed
     */
    public $redirect = false;

    /**
     * A successful, non-error and non-redirect parsed Autodiscover response
     * will be stored here.
     *
     * @var mixed
     */
    public $discovered = null;

    /**
     * Constructor for the EWSAutodiscover class.
     *
     * @param string $email
     * @param string $password
     * @param string $username
     *   If left blank, the email provided will be used.
     */
    public function __construct($email, $password, $username = null)
    {
        $this->email = $email;
        $this->password = $password;
        if ($username === null) {
            $this->username = $email;
        } else {
            $this->username = $username;
        }

        $this->setTLD();
    }

    /**
     * Execute the full discovery chain of events in the correct sequence
     * until a valid response is received, or all methods have failed.
     *
     * @return integer
     *   One of the AUTODISCOVERED_VIA_* constants.
     *
     * @throws \RuntimeException
     *   When all autodiscovery methods fail.
     */
    public function discover()
    {
        $result = $this->tryTLD();

        if ($result === false) {
            $result = $this->trySubdomain();
        }

        if ($result === false) {
            $result = $this->trySubdomainUnauthenticatedGet();
        }

        if ($result === false) {
            $result = $this->trySRVRecord();
        }

        if ($result === false) {
            throw new \RuntimeException('Autodiscovery failed.');
        }

        return $result;
    }

    /**
     * Return the settings discovered from the Autodiscover process.
     *
     * NULL indicates discovery has not completed (or been attempted)
     * FALSE indicates discovery was not successful. Check for errors
     *  or redirects.
     * An array will be returned with discovered settings on success.
     *
     * @return mixed
     */
    public function discoveredSettings()
    {
        return $this->discovered;
    }

    /**
     * Toggle skipping of SSL verification in cURL requests.
     *
     * @param boolean $skip
     *   Whether or not to skip SSL certificate verification.
     * @return self
     */
    public function skipSSLVerification($skip = true)
    {
        $this->skip_ssl_verification = (bool) $skip;

        return $this;
    }

    /**
     * Parse the hex ServerVersion value and return a valid
     * Client::VERSION_* constant.
     *
     * @return string|boolean A known version constant, or FALSE if it could not
     * be determined.
     *
     * @link http://msdn.microsoft.com/en-us/library/bb204122(v=exchg.140).aspx
     * @link http://blogs.msdn.com/b/pcreehan/archive/2009/09/21/parsing-serverversion-when-an-int-is-really-5-ints.aspx
     * @link http://office.microsoft.com/en-us/outlook-help/determine-the-version-of-microsoft-exchange-server-my-account-connects-to-HA001191800.aspx
     *
     * @param string $version_hex
     *   Hexadecimal version string.
     */
    public function parseServerVersion($version_hex)
    {
        $svbinary = base_convert($version_hex, 16, 2);
        if (strlen($svbinary) == 31) {
            $svbinary = '0' . $svbinary;
        }

        $majorversion = base_convert(substr($svbinary, 4, 6), 2, 10);
        $minorversion = base_convert(substr($svbinary, 10, 6), 2, 10);
        $majorbuild = base_convert(substr($svbinary, 17, 15), 2, 10);

        switch ($majorversion) {
            case 8:
                return $this->parseVersion2007($minorversion);
            case 14:
                return $this->parseVersion2010($minorversion);
            case 15:
                if ($minorversion == 0) {
                    return $this->parseVersion2013($majorbuild);
                }

                return $this->parseVersion2016();
        }

        // Guess we didn't find a known version.
        return false;
    }

    /**
     * Method to return a new Client object, auto-configured
     * with the proper hostname.
     *
     * @return mixed Client object on success, FALSE on failure.
     */
    public function newEWS()
    {
        // Discovery not yet attempted.
        if ($this->discovered === null) {
            $this->discover();
        }

        // Discovery not successful.
        if ($this->discovered === false) {
            return false;
        }

        $server = false;
        $version = null;

        // Pick out the host from the EXPR (Exchange RPC over HTTP).
        foreach ($this->discovered['Account']['Protocol'] as $protocol) {
            if (
                ($protocol['Type'] == 'EXCH' || $protocol['Type'] == 'EXPR')
                && isset($protocol['ServerVersion'])
            ) {
                if ($version === null) {
                    $sv = $this->parseServerVersion($protocol['ServerVersion']);
                    if ($sv !== false) {
                        $version = $sv;
                    }
                }
            }

            if ($protocol['Type'] == 'EXPR' && isset($protocol['Server'])) {
                $server = $protocol['Server'];
            }
        }

        if ($server) {
            if ($version === null) {
                // EWS class default.
                $version = Client::VERSION_2007;
            }
            return new Client(
                $server,
                (!empty($this->username) ? $this->username : $this->email),
                $this->password,
                $version
            );
        }

        return false;
    }

    /**
     * Static method may fail if there are issues surrounding SSL certificates.
     * In such cases, set up the object as needed, and then call newEWS().
     *
     * @param string $email
     * @param string $password
     * @param string $username
     *   If left blank, the email provided will be used.
     * @return mixed
     */
    public static function getEWS($email, $password, $username = null)
    {
        $auto = new Autodiscover($email, $password, $username);
        return $auto->newEWS();
    }

    /**
     * Perform an NTLM authenticated HTTPS POST to the top-level
     * domain of the email address.
     *
     * @return integer|boolean
     *   One of the AUTODISCOVERED_VIA_* constants or false on failure.
     */
    public function tryTLD()
    {
        $url = 'https://' . $this->tld . self::AUTODISCOVER_PATH;
        return ($this->tryViaUrl($url) ? self::AUTODISCOVERED_VIA_TLD : false);
    }

    /**
     * Perform an NTLM authenticated HTTPS POST to the 'autodiscover'
     * subdomain of the email address' TLD.
     *
     * @return integer|boolean
     *   One of the AUTODISCOVERED_VIA_* constants or false on failure.
     */
    public function trySubdomain()
    {
        $url = 'https://autodiscover.' . $this->tld . self::AUTODISCOVER_PATH;
        return ($this->tryViaUrl($url)
            ? self::AUTODISCOVERED_VIA_SUBDOMAIN
            : false);
    }

    /**
     * Perform an unauthenticated HTTP GET in an attempt to get redirected
     * via 302 to the correct location to perform the HTTPS POST.
     *
     * @return integer|boolean
     *   One of the AUTODISCOVERED_VIA_* constants or false on failure.
     */
    public function trySubdomainUnauthenticatedGet()
    {
        $this->reset();
        $url = 'http://autodiscover.' . $this->tld . self::AUTODISCOVER_PATH;
        $ch = curl_init();
        $opts = array(
            CURLOPT_URL                 => $url,
            CURLOPT_HTTPGET             => true,
            CURLOPT_RETURNTRANSFER      => true,
            CURLOPT_TIMEOUT             => 4,
            CURLOPT_CONNECTTIMEOUT      => $this->connection_timeout,
            CURLOPT_FOLLOWLOCATION      => false,
            CURLOPT_HEADER              => false,
            CURLOPT_HEADERFUNCTION      => array($this, 'readHeaders'),
            CURLOPT_HTTP200ALIASES      => array(301, 302),
            CURLOPT_IPRESOLVE           => CURL_IPRESOLVE_V4
        );
        curl_setopt_array($ch, $opts);
        $this->last_response    = curl_exec($ch);
        $this->last_info        = curl_getinfo($ch);
        $this->last_curl_errno  = curl_errno($ch);
        $this->last_curl_error  = curl_error($ch);

        if (
            $this->last_info['http_code'] == 302
            || $this->last_info['http_code'] == 301
        ) {
            if ($this->tryViaUrl($this->last_response_headers['location'])) {
                return self::AUTODISCOVERED_VIA_UNAUTHENTICATED_GET;
            }
        }

        return false;
    }

    /**
     * Attempt to retrieve the autodiscover host from an SRV DNS record.
     *
     * @link http://support.microsoft.com/kb/940881
     *
     * @return integer|boolean
     *   The value of self::AUTODISCOVERED_VIA_SRV_RECORD or false.
     */
    public function trySRVRecord()
    {
        $srvhost = '_autodiscover._tcp.' . $this->tld;
        $lookup = dns_get_record($srvhost, DNS_SRV);
        if (sizeof($lookup) > 0) {
            $host = $lookup[0]['target'];
            $url = 'https://' . $host . self::AUTODISCOVER_PATH;
            if ($this->tryViaUrl($url)) {
                return self::AUTODISCOVERED_VIA_SRV_RECORD;
            }
        }

        return false;
    }

    /**
     * Set the path to the file to be used by CURLOPT_CAINFO.
     *
     * @param string $path
     *   Path to a certificate file such as cacert.pem
     * @return self
     */
    public function setCAInfo($path)
    {
        if (file_exists($path) && is_file($path)) {
            $this->cainfo = $path;
        }

        return $this;
    }

    /**
     * Set the path to the file to be used by CURLOPT_CAPATH.
     *
     * @param string $path
     *   Path to a directory containing one or more CA certificates.
     * @return self
     */
    public function setCAPath($path)
    {
        if (is_dir($path)) {
            $this->capath = $path;
        }

        return $this;
    }

    /**
     * Set a connection timeout for the POST methods.
     *
     * @param integer $seconds
     *   Seconds to wait for a connection.
     * @return self
     */
    public function setConnectionTimeout($seconds)
    {
        $this->connection_timeout = intval($seconds);

        return $this;
    }

    /**
     * Perform the NTLM authenticated post against one of the chosen
     * endpoints.
     *
     * @param string $url
     *   URL to try posting to.
     * @param integer $timeout
     *   Number of seconds before the request should timeout.
     * @return boolean
     */
    public function doNTLMPost($url, $timeout = 6)
    {
        $this->reset();

        $ch = curl_init();
        $opts = array(
            CURLOPT_URL             => $url,
            CURLOPT_HTTPAUTH        => CURLAUTH_BASIC | CURLAUTH_NTLM,
            CURLOPT_CUSTOMREQUEST   => 'POST',
            CURLOPT_POSTFIELDS      => $this->getAutoDiscoverRequest(),
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_USERPWD         => $this->username . ':' . $this->password,
            CURLOPT_TIMEOUT         => $timeout,
            CURLOPT_CONNECTTIMEOUT  => $this->connection_timeout,
            CURLOPT_FOLLOWLOCATION  => true,
            CURLOPT_HEADER          => false,
            CURLOPT_HEADERFUNCTION  => array($this, 'readHeaders'),
            CURLOPT_IPRESOLVE       => CURL_IPRESOLVE_V4,
            CURLOPT_SSL_VERIFYPEER  => true,
            CURLOPT_SSL_VERIFYHOST  => 2,
        );

        // Set the appropriate content-type.
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml; charset=utf-8'));

        if (!empty($this->cainfo)) {
            $opts[CURLOPT_CAINFO] = $this->cainfo;
        }

        if (!empty($this->capath)) {
            $opts[CURLOPT_CAPATH] = $this->capath;
        }

        if ($this->skip_ssl_verification) {
            $opts[CURLOPT_SSL_VERIFYPEER] = false;
        }

        curl_setopt_array($ch, $opts);
        $this->last_response    = curl_exec($ch);
        $this->last_info        = curl_getinfo($ch);
        $this->last_curl_errno  = curl_errno($ch);
        $this->last_curl_error  = curl_error($ch);

        if ($this->last_curl_errno != CURLE_OK) {
            return false;
        }

        $discovered = $this->parseAutodiscoverResponse();

        return $discovered;
    }

    /**
     * Parse the Autoresponse Payload, particularly to determine if an
     * additional request is necessary.
     *
     * @return boolean|array FALSE if response isn't XML or parsed response
     *   array.
     */
    protected function parseAutodiscoverResponse()
    {
        // Content-type isn't trustworthy, unfortunately. Shame on Microsoft.
        if (substr($this->last_response, 0, 5) !== '<?xml') {
            return false;
        }

        $response = $this->responseToArray($this->last_response);

        if (isset($response['Error'])) {
            $this->error = $response['Error'];
            return false;
        }

        // Check the account action for redirect.
        switch ($response['Account']['Action']) {
            case 'redirectUrl':
                $this->redirect = array(
                    'redirectUrl' => $response['Account']['RedirectUrl']
                );
                return false;
            case 'redirectAddr':
                $this->redirect = array(
                    'redirectAddr' => $response['Account']['RedirectAddr']
                );
                return false;
            case 'settings':
            default:
                $this->discovered = $response;
                return true;
        }
    }

    /**
     * Set the top-level domain to be used with autodiscover attempts based
     * on the provided email address.
     *
     * @return boolean
     */
    protected function setTLD()
    {
        $pos = strpos($this->email, '@');
        if ($pos !== false) {
            $this->tld = trim(substr($this->email, $pos + 1));
            return true;
        }

        return false;
    }

    /**
     * Reset the response-related structures. Called before making a new
     * request.
     *
     * @return self
     */
    public function reset()
    {
        $this->last_response_headers = array();
        $this->last_info = array();
        $this->last_curl_errno = 0;
        $this->last_curl_error = '';

        return $this;
    }

    /**
     * Return the generated Autodiscover XML request body.
     *
     * @return string
     */
    public function getAutodiscoverRequest()
    {
        if (!empty($this->requestxml)) {
            return $this->requestxml;
        }

        $xml = new \XMLWriter();
        $xml->openMemory();
        $xml->setIndent(true);
        $xml->startDocument('1.0', 'UTF-8');
        $xml->startElementNS(
            null,
            'Autodiscover',
            'http://schemas.microsoft.com/exchange/autodiscover/outlook/requestschema/2006'
        );

        $xml->startElement('Request');
        $xml->writeElement('EMailAddress', $this->email);
        $xml->writeElement(
            'AcceptableResponseSchema',
            'http://schemas.microsoft.com/exchange/autodiscover/outlook/responseschema/2006a'
        );
        $xml->endElement();
        $xml->endElement();

        $this->requestxml = $xml->outputMemory();
        return $this->requestxml;
    }

    /**
     * Utility function to pick headers off of the incoming cURL response.
     * Used with CURLOPT_HEADERFUNCTION.
     *
     * @param resource $_ch
     *   cURL handle.
     * @param string $str
     *   Header string to read.
     * @return integer
     *   Bytes read.
     */
    public function readHeaders($_ch, $str)
    {
        $pos = strpos($str, ':');
        if ($pos !== false) {
            $key = strtolower(substr($str, 0, $pos));
            $val = trim(substr($str, $pos + 1));
            $this->last_response_headers[$key] = $val;
        }

        return strlen($str);
    }

    /**
     * Utility function to parse XML payloads from the response into easier
     * to manage associative arrays.
     *
     * @param string $xml
     *   XML to parse.
     * @return array
     */
    public function responseToArray($xml)
    {
        $doc = new \DOMDocument();
        $doc->loadXML($xml);
        $out = $this->nodeToArray($doc->documentElement);

        return $out['Response'];
    }

    /**
     * Recursive method for parsing DOM nodes.
     *
     * @param \DOMElement $node
     *   DOMNode object.
     * @return mixed
     *
     * @link https://github.com/gaarf/XML-string-to-PHP-array
     */
    protected function nodeToArray($node)
    {
        $output = array();
        switch ($node->nodeType) {
            case XML_CDATA_SECTION_NODE:
            case XML_TEXT_NODE:
                $output = trim($node->textContent);
                break;
            case XML_ELEMENT_NODE:
                for ($i = 0, $m = $node->childNodes->length; $i < $m; $i++) {
                    $child = $node->childNodes->item($i);
                    $v = $this->nodeToArray($child);
                    if (isset($child->tagName)) {
                        $t = $child->tagName;
                        if (!isset($output[$t])) {
                            $output[$t] = array();
                        }
                        $output[$t][] = $v;
                    } elseif ($v || $v === '0') {
                        $output = (string) $v;
                    }
                }

                // Edge case of a node containing a text node, which also has
                // attributes. this way we'll retain text and attributes for
                // this node.
                if (is_string($output) && $node->attributes->length) {
                    $output = array('@text' => $output);
                }

                if (is_array($output)) {
                    if ($node->attributes->length) {
                        $a = array();
                        foreach ($node->attributes as $attrName => $attrNode) {
                            $a[$attrName] = (string) $attrNode->value;
                        }
                        $output['@attributes'] = $a;
                    }
                    foreach ($output as $t => $v) {
                        if (is_array($v) && count($v) == 1 && $t != '@attributes') {
                            $output[$t] = $v[0];
                        }
                    }
                }
                break;
        }

        return $output;
    }

    /**
     * Parses the version of an Exchange 2007 server.
     *
     * @param integer $minorversion
     *   Minor server version.
     * @return string Server version.
     */
    protected function parseVersion2007($minorversion) {
        switch ($minorversion) {
            case 0:
                return Client::VERSION_2007;
            case 1:
            case 2:
            case 3:
                return Client::VERSION_2007_SP1;
            default:
                return Client::VERSION_2007;
        }
    }

    /**
     * Parses the version of an Exchange 2010 server.
     *
     * @param integer $minorversion
     *   Minor server version.
     * @return string Server version.
     */
    protected function parseVersion2010($minorversion) {
        switch ($minorversion) {
            case 0:
                return Client::VERSION_2010;
            case 1:
                return Client::VERSION_2010_SP1;
            case 2:
                return Client::VERSION_2010_SP2;
            default:
                return Client::VERSION_2010;
        }
    }

    /**
     * Parses the version of an Exchange 2013 server.
     *
     * @param integer $majorbuild
     *   Major build version.
     * @return string Server version.
     */
    protected function parseVersion2013($majorbuild) {
        return ($majorbuild == 847
            ? Client::VERSION_2013_SP1
            : Client::VERSION_2013);
    }

    /**
     * Parses the version of an Exchange 2016 server.
     *
     * @return string Server version.
     */
    protected function parseVersion2016() {
        return Client::VERSION_2016;
    }

    /**
     * Attempts an autodiscover via a URL.
     *
     * @param string $url
     *   Url to attempt an autodiscover.
     * @param integer $timeout
     *    Number of seconds before the request should timeout.
     * @return boolean
     */
    protected function tryViaUrl($url, $timeout = 6)
    {
        $result = $this->doNTLMPost($url, $timeout);
        return ($result ? true : false);
    }
}
