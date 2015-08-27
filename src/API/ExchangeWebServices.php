<?php
/**
 * Contains ExchangeWebServices.
 */

namespace jamesiarmes\PEWS\API;

use jamesiarmes\PEWS\API\NTLMSoapClient\Exchange;
use jamesiarmes\PEWS\API\Message;
use jamesiarmes\PEWS\API\Type\EmailAddressType;

/**
 * Base class of the Exchange Web Services application.
 *
 * @package php-ews\Client
 *
 * @method Type CreateItem($request)
 * @method Type FindItem($request)
 * @method Type GetFolder($request)
 * @method Type SyncFolderItems($request)
 * @method Type FindFolder($request)
 * @method Type UpdateItem($request)
 * @method Type DeleteItem($request)
 * @method Type GetItem($request)
 */
class ExchangeWebServices
{
    /**
     * Microsoft Exchange 2007
     *
     * @var string
     */
    const VERSION_2007 = 'Exchange2007';

    /**
     * Microsoft Exchange 2007 SP1
     *
     * @var string
     */
    const VERSION_2007_SP1 = 'Exchange2007_SP1';

    /**
     * Microsoft Exchange 2007 SP2
     *
     * @var string
     */
    const VERSION_2007_SP2 = 'Exchange2007_SP2';

    /**
     * Microsoft Exchange 2007 SP3
     *
     * @var string
     */
    const VERSION_2007_SP3 = 'Exchange2007_SP3';

    /**
     * Microsoft Exchange 2010
     *
     * @var string
     */
    const VERSION_2010 = 'Exchange2010';

    /**
     * Microsoft Exchange 2010 SP1
     *
     * @var string
     */
    const VERSION_2010_SP1 = 'Exchange2010_SP1';

    /**
     * Microsoft Exchange 2010 SP2
     *
     * @var string
     */
    const VERSION_2010_SP2 = 'Exchange2010_SP2';

    /**
     * Password to use when connecting to the Exchange server.
     *
     * @var string
     */
    protected $password;

    /**
     * Location of the Exchange server.
     *
     * @var string
     */
    protected $server;

    /**
     * SOAP client used to make the request
     *
     * @var NTLMSoapClient
     */
    protected $soap;

    /**
     * Username to use when connecting to the Exchange server.
     *
     * @var string
     */
    protected $username;

    /**
     * Exchange impersonation
     *
     * @var Type
     */
    protected $impersonation;

    /**
     * @var EmailAddressType
     */
    protected $primarySmtpMailbox;

    /**
     * @return EmailAddressType
     */
    public function getPrimarySmtpMailbox()
    {
        return $this->primarySmtpMailbox;
    }

    public function getPrimarySmtpEmailAddress()
    {
        if ($this->primarySmtpMailbox == null) {
            return null;
        }

        return $this->primarySmtpMailbox->getEmailAddress();
    }

    public function setPrimarySmtpEmailAddress($emailAddress)
    {
        $mailbox = new EmailAddressType();
        $mailbox->setEmailAddress($emailAddress);
        $this->primarySmtpMailbox = $mailbox;

        return $this;
    }

    /**
     * Miscrosoft Exchange version that we are going to connect to
     *
     * @var string
     *
     * @see ExchangeWebServices::VERSION_2007
     * @see ExchangeWebServices::VERSION_2007_SP1
     * @see ExchangeWebServices::VERSION_2010
     * @see ExchangeWebServices::VERSION_2010_SP1
     */
    protected $version;

    protected $options;

    /**
     * The timezone for the client
     *
     * @var bool
     */
    protected $timezone = false;

    /**
     * @param boolean $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * Constructor for the ExchangeWebServices class
     *
     * @param string $server
     * @param string $username
     * @param string $password
     * @param array $options
     */
    public function __construct(
        $server = null,
        $username = null,
        $password = null,
        $options = [ ]
    ) {
        $options = array_replace_recursive(['version' => self::VERSION_2007], $options);

        // Set the object properties.
        $this->setServer($server);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setVersion($options['version']);

        if (isset($options['primarySmtpEmailAddress'])) {
            $this->setPrimarySmtpEmailAddress($options['primarySmtpEmailAddress']);
        }

        if (isset($options['impersonation'])) {
            $this->setPrimarySmtpEmailAddress($options['impersonation']);
        }

        $this->options = $options;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param $name
     * @param $arguments
     * @return Type
     * @throws Exception
     */
    public function __call($name, $arguments)
    {
        $response = $this->getClient()->__call($name, $arguments);
        return $this->processResponse($response);
    }

    /**
     * Returns the SOAP Client that may be used to make calls against the server
     *
     * @return Exchange
     */
    public function getClient()
    {
        if (!$this->soap) {
            $this->initializeClient();
        }

        return $this->soap;
    }

    /**
     * Sets the client
     *
     * @param Exchange $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->soap = $client;
        return $this;
    }

    /**
     * Sets the impersonation property
     *
     * @param Type $impersonation
     * @return $this
     */
    public function setImpersonation($impersonation)
    {
        $this->impersonation = $impersonation;

        return $this;
    }

    /**
     * Gets the impersonation property
     *
     * @return Type
     */
    public function getImpersonation()
    {
        return $this->impersonation;
    }

    /**
     * Sets the password property
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Sets the server property, after cleaning by cleanServerUrl
     *
     * @param $server
     * @return $this
     */
    public function setServer($server)
    {
        $server = $this->cleanServerUrl($server);

        $this->server = $server;

        return $this;
    }

    /**
     * Gets the server property
     *
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Cleans the server URL for usage
     *
     * @param $server
     * @return string
     */
    public function cleanServerUrl($server)
    {
        $url = parse_url($server);
        if (!isset($url['host']) && isset($url['path'])) {
            $url['host'] = $url['path'];
            unset($url['path']);
        }

        $server = $url['host'];
        if (isset($url['port'])) {
            $server .= ':' . $url['port'];
        }

        if (isset($url['path'])) {
            $server .= $url['path'];
        }

        $server = rtrim($server, "/");

        return $server;
    }

    /**
     * Sets the user name property
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return true;
    }

    /**
     * Gets the username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the version property
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        $this->options['version'] = $version;

        return $this;
    }

    /**
     * Get the version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Initializes the SoapClient object to make a request
     *
     * @return Exchange
     */
    protected function initializeClient()
    {
        $options = array (
            'user' => $this->username,
            'password' => $this->password,
            'version' => $this->version,
            'location' => 'https://' . $this->server . '/EWS/Exchange.asmx',
            'impersonation' => $this->impersonation,
            'trace' => '1',
            'exceptions' => true,
            'classmap' => ClassMap::getClassMap()
        );

        $options = array_replace_recursive($options, $this->options);

        $client = new Exchange(
            dirname(__FILE__) . '/../../Resources/wsdl/services.wsdl',
            $options
        );

        $this->setClient($client);

        return $this;
    }

    /**
     * Process a response to verify that it succeeded and take the appropriate
     * action
     *
     * @param \jamesiarmes\PEWS\API\Message\BaseResponseMessageType $response
     * @return \jamesiarmes\PEWS\API\Message\ArrayOfResponseMessageType|\jamesiarmes\PEWS\API\Message\ResponseMessageType
     * @throws Exception
     * @throws \Exception
     */
    protected function processResponse($response)
    {
        // If the soap call failed then we need to thow an exception.
        $code = $this->getClient()->getResponseCode();
        if ($code != 200) {
            throw new Exception('SOAP client returned status of ' . $code, $code);
        }

        if (empty($response) ||
            empty($response->getNonNullResponseMessages())) {
                throw new \Exception('No response returned');
        }

        $response = $response->getResponseMessages();
        $response = $this->drillDownResponseLevels($response);

        return $response;
    }

    /**
     * @param $response Type
     */
    public function drillDownResponseLevels($response)
    {
        if ($response instanceof Type) {
            $items = $response->getNonNullItems();
        } elseif (is_array($response)) {
            $items = $response;
        }

        if ($response instanceof Message\ResponseMessageType) {
            if ($response->getResponseClass() !== "Success") {
                throw new \Exception($response->getMessageText());
            }

            unset($items['responseClass']);
            unset($items['responseCode']);
        }

        if (count($items) == 1) {
            reset($items);
            $key = key($items);
            $methodName = "get$key";
            $response = $response->$methodName();

            $response = $this->drillDownResponseLevels($response);
        } elseif (is_array($items) && isset($items[1]) && $items[1] instanceof Message\ResponseMessageType) {
            $response = array();
            foreach ($items as $responseItem) {
                $response[] = $this->drillDownResponseLevels($responseItem);
            }
        }

        return $response;
    }
}
