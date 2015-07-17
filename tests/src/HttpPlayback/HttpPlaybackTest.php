<?php

namespace jamesiarmes\PEWS\Test;

use jamesiarmes\PEWS\HttpPlayback\HttpPlayback;

class HttpPlaybackTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        $filename = __DIR__ . '/testDir/testFile.json';
        unlink(__DIR__ . '/testDir/testFile.json');
        rmdir(__DIR__ . '/testDir/');
    }

    public function testEndRecord()
    {
        $filename = __DIR__ . '/testDir/testFile.json';

        $playback = new HttpPlayback();
        $playback->setPlaybackOptions([
            'recordLocation' => __DIR__,
            'recordFileName' => '/testDir/testFile.json'
        ]);

        $playback->endRecord();

        $this->assertFileNotExists($filename);

        $playback = new HttpPlayback();
        $playback->setPlaybackOptions([
            'recordLocation' => __DIR__,
            'recordFileName' => '/testDir/testFile.json',
            'mode' => 'record'
        ]);

        $playback->endRecord();
        $this->assertFileExists($filename);
        $this->assertEquals('[]', file_get_contents($filename));
    }
}