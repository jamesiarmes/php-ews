<?php

namespace jamesiarmes\PEWS\HttpPlayback;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client;

trait HttpPlayback
{
    protected static $mode = 'live';

    protected static $callList = [];

    protected static $recordLocation;

    private static $shutdownRegistered = false;

    /**
     * @var Client
     */
    private static $client;

    public function setPlaybackOptions($options = [])
    {
        $options = array_merge(['mode' => null, 'recordLocation' => null], $options);

        if ($options['mode'] !== null) {
            self::$mode = $options['mode'];
        }

        if ($options['recordLocation'] !== null) {
            self::$mode = $options['recordLocation'];
        }
    }

    /**
     * Get the client for making calls
     *
     * @return Client
     */
    public function getHttpClient()
    {
        if (self::$client == null) {
            $handler = HandlerStack::create();

            if (self::$mode == 'record') {
                $this->container = [];
                $history = Middleware::history(self::$callList);
                $handler->push($history);
            } elseif (self::$mode == 'playback') {
                $recordings = $this->getRecordings();

                $playList = $recordings;
                $mockedResponses = [];
                foreach ($playList as $item) {
                    $mockedResponses[] = new Response($item['statusCode'], $item['headers'], $item['body']);
                }

                $mockHandler = new MockHandler($mockedResponses);
                $handler = HandlerStack::create($mockHandler);
            }

            self::$client = new Client(['handler' => $handler]);

            if (!self::$shutdownRegistered) {
                register_shutdown_function(array($this, 'endRecord'));
                self::$shutdownRegistered = true;
            }
        }

        return self::$client;
    }

    /**
     * Sets the client
     *
     * @param GuzzleHttp\Client $client
     * @return $this
     */
    public function setHttpClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public static function getRecordLocation()
    {
        if (!self::$recordLocation) {
            $dir = __DIR__;
            $dirPos = strrpos($dir, "src/API");
            $dir = substr($dir, 0, $dirPos);

            self::$recordLocation = $dir . 'Resources/recordings/saveState.json';
        }

        return self::$recordLocation;
    }

    public static function getRecordings()
    {
        $saveLocation = self::getRecordLocation();
        $records = json_decode(file_get_contents($saveLocation), true);

        return $records;
    }

    public function endRecord()
    {
        if (self::$mode != 'record') {
            return;
        }

        $saveList = [];
        foreach (self::$callList as $item) {
            /** @var Response $response */
            $response = $item['response'];
            $saveList[] = [
                'statusCode' => $response->getStatusCode(),
                'headers' => $response->getHeaders(),
                'body' => $response->getBody()->__toString()
            ];
        }

        $saveLocation = self::getRecordLocation();
        file_put_contents($saveLocation, json_encode($saveList));
    }
}