<?php

namespace jamesiarmes\PEWS\Tesst;

use jamesiarmes\PEWS\Type;
use PHPUnit_Framework_TestCase;
use Mockery;

class TypeTest extends PHPUnit_Framework_TestCase
{
    private $_typeMock;

    public function getTypeMock()
    {
        if (!$this->_typeMock) {
            $object = Mockery::mock('jamesiarmes\PEWS\Type')->makePartial();
            $this->_typeMock = $object;
        }

        return $this->_typeMock;
    }

    public function testBuildFromArray()
    {
        $array = array(
            'One' => 'One',
            'Two' => 'Two',
            'Three' => array('1', '2', '3'),
            'Four' => array('FourOne' => 1, 'FourTwo' => 2, 'FourThree' => 3)
        );

        $excepted = new Type();
        $excepted->One = 'One';
        $excepted->Two = 'Two';
        $excepted->Three = array('1', '2', '3');
        $excepted->Four = new Type();
        $excepted->Four->FourOne = 1;
        $excepted->Four->FourTwo = 2;
        $excepted->Four->FourThree = 3;

        $actual = Type::buildFromArray($array);

        $this->assertEquals($excepted, $actual);
    }

    /**
     * @dataProvider arrayAssocProvider
     *
     * @param $array
     * @param $expected
     */
    public function testArrayIsAssoc($array, $expected)
    {
        $type = $this->getTypeMock();
        $isAssoc = $type->arrayIsAssoc($array);

        $this->assertEquals($expected, $isAssoc);
    }

    public function testToXmlObject()
    {
        $type = $this->getTypeMock();
        $this->assertInstanceOf('jamesiarmes\PEWS\Type', $type);
    }

    /**
     * @dataProvider toStringProvider
     */
    public function testToString($string, $expected)
    {
        $type = $this->getTypeMock();
        $type->_ = $string;
        $this->assertEquals($expected, $type->__toString());
        $this->assertEquals($expected, (string) $type);
    }

    public function arrayAssocProvider()
    {
        return array(
            array(array(), false),
            array(array(1,2,3), false),
            array(array('One', 'Two', 'Three'), false),
            array(array('One'=>1, 'Two'=>2, 'Three'=>3), true),
            array(array('One'=>1, '2', '3'), true)
        );
    }

    public function toStringProvider()
    {
        return array(
            array(null, ''),
            array(false, ''),
            array(1, ''),
            array(new \stdClass(), ''),
            array('one', 'one')
        );
    }
}
