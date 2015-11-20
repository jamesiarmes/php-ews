<?php

namespace jamesiarmes\PEWS\Test\API;

use jamesiarmes\PEWS\API\ExchangeWebServicesAuth;
use jamesiarmes\PEWS\API\Type;
use Mockery;
use PHPUnit_Framework_TestCase;
use jamesiarmes\PEWS\API\NTLMSoapClient\Exchange;

class ExchangeWebServicesAuthTest extends PHPUnit_Framework_TestCase
{
    public function testFromUsernameAndPassword()
    {
        $expected = array(
            'curl' => array(
                CURLOPT_HTTPAUTH => CURLAUTH_BASIC | CURLAUTH_NTLM,
                CURLOPT_USERPWD => 'testUser' . ':' . 'testPassword'
            )
        );

        $this->assertEquals($expected, ExchangeWebServicesAuth::fromUsernameAndPassword('testUser', 'testPassword'));
    }
}
