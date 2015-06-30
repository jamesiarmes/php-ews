<?php
namespace jamesiarmes\PEWS\API\Test;

use jamesiarmes\PEWS\API\Type\ArrayOfStrings;
use PHPUnit_Framework_TestCase;

class ArrayOfStringsTest extends PHPUnit_Framework_TestCase {
    public function testToString()
    {
        $object = new ArrayOfStrings();

        $object->String = "test";
        $this->assertEquals("test", $object->__toString());

        $object->String = new \stdClass();
        $this->assertEquals(new \stdClass(), $object->__toString());
    }
}
