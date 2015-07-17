<?php

namespace jamesiarmes\PEWS\HttpPlayback;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client;

class HttpPlayback
{
    protected $mode = 'live';

    protected $callList = [];

    protected $recordLocation;

    protected $recordFileName = 'saveState.json';

    private $shutdownRegistered = false;

    private static $instances = [ ];

    /**
     * @var Client
     */
    private $client;

    public static function getInstance($options = [ ])
    {
        foreach (self::$instances as $instance) {
            if ($instance['options'] == $options) {
                return $instance['instance'];
            }
        }

        $instance = new static();
        $instance->setPlaybackOptions($options);
        self::$instances[] = [
            'instance' => $instance,
            'options' => $options
        ];

        return $instance;
    }

    public function setPlaybackOptions($options = [])
    {
        $options = array_merge(['mode' => null, 'recordLocation' => null, 'recordFileName' => null], $options);

        if ($options['mode'] !== null) {
            $this->mode = $options['mode'];
        }

        if ($options['recordLocation'] !== null) {
            $this->recordLocation = $options['recordLocation'];
        }

        if ($options['recordFileName'] !== null) {
            $this->recordFileName = $options['recordFileName'];
        }
    }

    /**
     * Get the client for making calls
     *
     * @return Client
     */
    public function getHttpClient()
    {
        if ($this->client == null) {
            $handler = HandlerStack::create();

            if ($this->mode == 'record') {
                $history = Middleware::history($this->callList);
                $handler->push($history);
            } elseif ($this->mode == 'playback') {
                $recordings = $this->getRecordings();

                $playList = $recordings;
                $mockedResponses = [];
                foreach ($playList as $item) {
                    $mockedResponses[] = new Response($item['statusCode'], $item['headers'], $item['body']);
                }

                $mockHandler = new MockHandler($mockedResponses);
                $handler = HandlerStack::create($mockHandler);
            }

            $this->client = new Client(['handler' => $handler]);

            if (!$this->shutdownRegistered) {
                register_shutdown_function(array($this, 'endRecord'));
                $this->shutdownRegistered = true;
            }
        }

        return $this->client;
    }

    /**
     * Sets the client
     *
     * @param Client $client
     * @return $this
     */
    public function setHttpClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function getRecordLocation()
    {
        if (!$this->recordLocation) {
            $dir = __DIR__;
            $dirPos = strrpos($dir, "src/API");
            $dir = substr($dir, 0, $dirPos);

            $this->recordLocation = $dir . 'Resources/recordings/';
        }

        return $this->recordLocation;
    }

    public function getRecordFilePath()
    {
        $path = $this->getRecordLocation() . $this->recordFileName;
        $path = str_replace("\\", "/", $path);
        return $path;
    }

    public function getRecordings()
    {
        $saveLocation = $this->getRecordFilePath();
        $records = json_decode(file_get_contents($saveLocation), true);

        return $records;
    }

    public function endRecord()
    {
        if ($this->mode != 'record') {
            return;
        }

        $saveList = [];
        foreach ($this->callList as $item) {
            /** @var Response $response */
            $response = $item['response'];
            $saveList[] = [
                'statusCode' => $response->getStatusCode(),
                'headers' => $response->getHeaders(),
                'body' => $response->getBody()->__toString()
            ];
        }

        $saveLocation = $this->getRecordFilePath();
        $folder = pathinfo($saveLocation)['dirname'];
        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        file_put_contents($saveLocation, json_encode($saveList));
    }
}
