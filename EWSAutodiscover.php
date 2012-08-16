<?php
/**
 * Exchange Web Services Autodiscover implementation.
 *
 * @package php-ews
 * @subpackage Auto Discovery
 */

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
 */
class EWSAutodiscover
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
     * @param string $username If left blank, the email provided will be used.
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
     * @return An AUTODISCOVERED_VIA_* constant or FALSE on failure.
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

        return $result;
    }

    /**
     * Return the settings discovered from the Autodiscover process.
     *
     * NULL indicates discovery hasn't completed (or been attempted)
     * FALSE indicates discovery wasn't successful. Check for errors 
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
     * @param boolean $skip To skip, or not.
     * @return self
     */
    public function skipSSLVerification($skip = true)
    {
        $this->skip_ssl_verification = (bool) $skip;

        return $this;
    }

    /**
     * Parse the hex ServerVersion value and return a valid
     * ExchangeWebServices::VERSION_* constant.
     *
     * @return string|boolean A known version constant, or FALSE if it could not
     * be determined.
     *
     * @link http://msdn.microsoft.com/en-us/library/bb204122(v=exchg.140).aspx
     * @link http://blogs.msdn.com/b/pcreehan/archive/2009/09/21/parsing-serverversion-when-an-int-is-really-5-ints.aspx
     * @link http://office.microsoft.com/en-us/outlook-help/determine-the-version-of-microsoft-exchange-server-my-account-connects-to-HA001191800.aspx
     */
    public function parseServerVersion($version_hex)
    {
        $svbinary = base_convert($version_hex, 16, 2);
        if (strlen($svbinary) == 31) {
            $svbinary = '0'.$svbinary;
        }

        $majorversion = base_convert(substr($svbinary, 4, 6), 2, 10);
        $minorversion = base_convert(substr($svbinary, 10, 6), 2, 10);
        $buildversion = base_convert(substr($svbinary, 17, 15), 2, 10);

        if ($majorversion == 8) {
            switch ($minorversion) {
                case 0:
                    return ExchangeWebServices::VERSION_2007;
                    break;
                case 1:
                    return ExchangeWebServices::VERSION_2007_SP1;
                    break;
                case 2:
                    return ExchangeWebServices::VERSION_2007_SP2;
                    break;
                case 3:
                    return ExchangeWebServices::VERSION_2007_SP3;
                    break;
                default:
                    return ExchangeWebServices::VERSION_2007;
            }
        } elseif ($majorversion == 14) {
            switch ($minorversion) {
                case 0:
                    return ExchangeWebServices::VERSION_2010;
                    break;
                case 1:
                    return ExchangeWebServices::VERSION_2010_SP1;
                    break;
                case 2:
                    return ExchangeWebServices::VERSION_2010_SP2;
                    break;
                default:
                    return ExchangeWebServices::VERSION_2010;
            }
        }

        // Guess we didn't find a known version.
        return false;
    }

    /**
     * Method to return a new ExchangeWebServices object, auto-configured
     * with the proper hostname.
     *
     * @return mixed ExchangeWebServices object on success, FALSE on failure.
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
                if ($version == null) {
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
                $version = ExchangeWebServices::VERSION_2007;
            }
            return new ExchangeWebServices(
                $server,
                $this->email,
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
     * @param string $username If left blank, the email provided will be used.
     * @return mixed
     */
    public static function getEWS($email, $password, $username = null)
    {
        $auto = new EWSAutodiscover($email, $password, $username);
        return $auto->newEWS();
    }

    /** 
     * Perform an NTLM authenticated HTTPS POST to the top-level 
     * domain of the email address. 
     *
     * @return An AUTODISCOVERED_VIA_* constant or FALSE on failure.
     */
    public function tryTLD()
    {
        $url = 'https://www.'.$this->tld . self::AUTODISCOVER_PATH;
        $result = $this->doNTLMPost($url, 5);
        if ($result) {
            return self::AUTODISCOVERED_VIA_TLD;
        }

        return false;
    }

    /**
     * Perform an NTLM authenticated HTTPS POST to the 'autodiscover' 
     * subdomain of the email address' TLD.
     *
     * @return An AUTODISCOVERED_VIA_* constant or FALSE on failure.
     */
    public function trySubdomain()
    {
        $url = 'https://autodiscover.'.$this->tld . self::AUTODISCOVER_PATH;
        $result = $this->doNTLMPost($url, 5);
        if ($result) {
            return self::AUTODISCOVERED_VIA_SUBDOMAIN;
        }

        return false;
    }

    /**
     * Perform an unauthenticated HTTP GET in an attempt to get redirected
     * via 302 to the correct location to perform the HTTPS POST.
     *
     * @return An AUTODISCOVERED_VIA_* constant or FALSE on failure.
     */
    public function trySubdomainUnauthenticatedGet()
    {
        $this->reset();
        $url = 'http://autodiscover.'.$this->tld . self::AUTODISCOVER_PATH;
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
            // Do the NTLM POST to the redirect.
            $result = $this->doNTLMPost(
                $this->last_response_headers['location']
            );

            if ($result) {
                return self::AUTODISCOVERED_VIA_UNAUTHENTICATED_GET;
            }
        }

        return false;
    }

    /**
     * Attempt to retrieve the autodiscover host from an SRV DNS record.
     *
     * @link http://support.microsoft.com/kb/940881
     * @return self::AUTODISCOVERED_VIA_SRV_RECORD or false
     */
    public function trySRVRecord()
    {
        $srvhost = '_autodiscover._tcp.' . $this->tld;
        $lookup = dns_get_record($srvhost, DNS_SRV);
        if (sizeof($lookup) > 0) {
            $host = $lookup[0]['target'];
            $url = 'https://' . $host . self::AUTODISCOVER_PATH;
            $result = $this->doNTLMPost($url);
            if ($result) {
                return self::AUTODISCOVERED_VIA_SRV_RECORD;
            }
        }

        return false;
    }

    /**
     * Set the path to the file to be used by CURLOPT_CAINFO.
     *
     * @param string $path Path to a certificate file such as cacert.pem
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
     * @param string $path Path to a directory containing one or more CA 
     * certificates.
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
     * @param integer $seconds Seconds to wait for a connection.
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
     * @param string $url URL to try posting to
     * @param integer $timeout Overall cURL timeout for this request
     * @return boolean
     */
    public function doNTLMPost($url, $timeout = 6)
    {
        $this->reset();

        $ch = curl_init();
        $opts = array(
            CURLOPT_URL             => $url,
            CURLOPT_HTTPAUTH        => CURLAUTH_NTLM,
            CURLOPT_CUSTOMREQUEST   => 'POST',
            CURLOPT_POSTFIELDS      => $this->getAutoDiscoverRequest(),
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_USERPWD         => $this->username.':'.$this->password,
            CURLOPT_TIMEOUT         => $timeout,
            CURLOPT_CONNECTTIMEOUT  => $this->connection_timeout,
            CURLOPT_FOLLOWLOCATION  => true,
            CURLOPT_HEADER          => false,
            CURLOPT_HEADERFUNCTION  => array($this, 'readHeaders'),
            CURLOPT_IPRESOLVE       => CURL_IPRESOLVE_V4,
            CURLOPT_SSL_VERIFYPEER  => true,
            CURLOPT_SSL_VERIFYHOST  => true,
        );

        // Set the appropriate content-type.
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml; charset=utf-8'));

        if (! empty($this->cainfo)) {
            $opts[CURLOPT_CAINFO] = $this->cainfo;
        }

        if (! empty($this->capath)) {
            $opts[CURLOPT_CAPATH] = $this->capath;
        }

        if ($this->skip_ssl_verification) {
            $opts[CURLOPT_SSL_VERIFYPEER] = false;
            $opts[CURLOPT_SSL_VERIFYHOST] = false;
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
     * @return mixed FALSE if response isn't XML or parsed response array
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
                    'redirectUrl' => $response['Account']['redirectUrl']
                );
                return false;
                break;
            case 'redirectAddr':
                $this->redirect = array(
                    'redirectAddr' => $response['Account']['redirectAddr']
                );
                return false;
                break;
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
            $this->tld = trim(substr($this->email, $pos+1));
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
        if (! empty($this->requestxml)) {
            return $this->requestxml;
        }

        $xml = new XMLWriter;
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
     * @param resource $_ch cURL handle
     * @param string $str Header string to read
     * @return integer Bytes read
     */
    public function readHeaders($_ch, $str)
    {
        $pos = strpos($str, ':');
        if ($pos !== false) {
            $key = strtolower(substr($str, 0, $pos));
            $val = trim(substr($str, $pos+1));
            $this->last_response_headers[$key] = $val;
        }

        return strlen($str);
    }

    /**
     * Utility function to parse XML payloads from the response into easier
     * to manage associative arrays.
     *
     * @param string $xml XML to parse
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
     * @link https://github.com/gaarf/XML-string-to-PHP-array
     * @param object $node DOMNode object
     * @return mixed
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
                for ($i=0, $m = $node->childNodes->length; $i < $m; $i++) {
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
                        if (is_array($v) && count($v)==1 && $t!='@attributes') {
                            $output[$t] = $v[0];
                        }
                    }
                }
                break;
        }

        return $output;
    }

}
